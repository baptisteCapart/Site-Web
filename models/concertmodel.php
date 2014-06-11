<?php 

function insertConcert($nom, $jour ,$description, $début, $duree, $message, $photocover, $salle_id, $artiste_id, $inviteur,$non_repondu)
{
	global $bdd;
	$topic_id = newtopic();
	$bdd->query("INSERT INTO concert(nom, jour, heure, duree, description, message, salle_id, artiste_id, photocover, topic_id, inviteur, non_repondu) 
		VALUES ('$nom', '$jour', '$début', '$duree', '$description', '$message', '$salle_id', '$artiste_id', '$photocover', '$topic_id', '$inviteur','$non_repondu')") or die(print_r($bdd->errorInfo()));
	newpost($message,$topic_id);
	$req = $bdd->query("SELECT concert_id FROM concert WHERE artiste_id = '$artiste_id' and salle_id = '$salle_id' order by concert_id DESC limit 1") or die(print_r($bdd->errorInfo()));
	$res = $req->fetch();
	return $res['concert_id'] ;	
}

function photoC($id,$photo){
	global $bdd;
	$bdd->query("UPDATE concert 
	SET photocover='$photo'
	WHERE concert_id='$id'");
}

function listeConcerts(){
	global $bdd;
	$result= $bdd->query ("SELECT concert_id, nom, photocover from concert where accord = 1");
	return $result;	
}

function listeConcertsUser($inviteur, $invitéID, $invité, $nbr, $id){
	global $bdd;
	$result= $bdd->query ("SELECT concert_id, nom, $inviteur from concert where $invitéID = '$id' and non_repondu ='$invité' and inviteur = $nbr and accord = 0");
	return $result;
}

// function listeConcertsS($id){
// 	global $bdd;
// 	$result= $bdd->query ("SELECT concert_id, nom, artiste_id from concert where salle_id = '$id' and non_repondu = 'salle' and inviteur = 1 and accord = 0");
// 	return $result;
// }

function nouveauMessage($user,$invité,$nbr,$id){
	global $bdd;
	$result= $bdd->query ("SELECT concert_id from concert where $user = '$id' and non_repondu ='$invité' and inviteur = $nbr and accord = 0");
	$result2 = $result->fetch();
	if (!$result2){
		return false;

	}else{
		return true;
	}
}
// function nouveauMessageS($id){
// 	global $bdd;
// 	$result = $bdd->query ("SELECT concert_id from concert where salle_id = '$id' and non_repondu = 'salle' and inviteur = 1 and accord = 0");
// 	$result2 = $result->fetch();
// 	if (!$result2){
// 		return false;

// 	}else{
// 		return true;
// 	}
// }



function updateConcert($nom, $jour ,$description, $début, $duree, $message, $photocover, $id, $inviteur,$non_repondu)
{
	global $bdd;
	$bdd->query("UPDATE concert 
		SET nom='$nom',
			jour='$jour',
			heure='$début',
			duree='$duree',
			description='$description',
			message= '$message',
			photocover='$photocover',
			inviteur = '$inviteur',
			non_repondu = '$non_repondu'

		WHERE concert_id='$id'");
}

function accord($id, $accord){
	global $bdd;
	$bdd->query("UPDATE concert SET accord='$accord' WHERE concert_id='$id'");
	$concert = recupererdonnees('concert', 'concert_id', $id);
	$artiste = recupererdonnees('artiste', 'artiste_id', $concert['artiste_id']);
	$salle = recupererdonnees('salle', 'salle_id', $concert['salle_id']);
	$dateconcert = new DateTime($concert['jour']);
	$description = "Tout nouveau concert de ".$artiste['nom']." prévu pour le ".$dateconcert->format('d/m/Y').", tenez-vous prêts !";
	$bdd->query("INSERT INTO news (artiste_id, salle_id, typenews, datenews, photocover, description, lien) 
		VALUES (".$artiste['artiste_id'].",".$salle['salle_id'].", 1,'".$concert['jour']."', '".$concert['photocover']."', '$description', 'index.php?page=pageconcertcontrolleur&id=".$concert['concert_id']."')") or die (print_r($bdd->errorInfo()));
}

function newtopic ()
{
	global $bdd;
	$public = 1;
	$bdd->query("INSERT INTO topic (public) VALUES ('$public')");
	$sql = $bdd->query("SELECT id_topic from topic where public = 1 order by id_topic DESC limit 1") or die(print_r($bdd->errorInfo()));
	$req = $sql->fetch();
	return $req['id_topic'];
}

function newpost ($message, $topic_id)
{
	global $bdd;
	$bdd->query("INSERT INTO post (contenu, topic_id) VALUES ( '$message', '$topic_id')") or die (print_r($bdd->errorInfo()));
}

function listePost ($topic_id)
{
	global $bdd;
	$req = $bdd->query('SELECT * FROM post WHERE topic_id='.$topic_id.' ORDER BY id_post DESC') or die (print_r($bdd->errorInfo()));
	return $req;
}
function participate($membre_id, $concert_id){
	global $bdd;
	$bdd-> query("INSERT INTO participation(membre_id,concert_id)  VALUES ('$membre_id','$concert_id')");
}

function listeMembre($id)
{
	global $bdd;
	$sql = "SELECT * from participation where concert_id ='$id'";
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req->fetch();
  	return $donnee;
}

function Membres($concert_id){
	
	global $bdd;
	$req = $bdd->query("SELECT membre.pseudo, membre.membre_id FROM membre, participation WHERE membre.membre_id = participation.membre_id AND participation.concert_id = $concert_id") or die(print_r($bdd->errorInfo()));
	return $req;
}

function checkParticipation($membre_id, $concert_id){
	global $bdd;
	$sql = $bdd->query("SELECT membre_id from participation where concert_id='$concert_id' and membre_id='$membre_id'") or die(print_r($bdd->errorInfo()));
	$req = $sql->fetch();
	if (!$req){
		return true;

	}else{
		return false;
	}
}

function ConcertsParticipes($membre_id){
	
	global $bdd;
	$req = $bdd->query("SELECT concert.nom, concert.concert_id FROM concert, participation WHERE participation.concert_id = concert.concert_id AND participation.membre_id=$membre_id") or die(print_r($bdd->errorInfo()));
	return $req;
}

function ConcertP($user,$id){
	global $bdd;
	$req = $bdd->query("SELECT nom, concert_id,jour FROM concert WHERE $user=$id and accord = 1 and jour<CURDATE() order by jour ") or die(print_r($bdd->errorInfo()));
	return $req;	
}

// function ConcertArtisteP($artiste_id){
// 	global $bdd;
// 	$req = $bdd->query("SELECT nom, concert_id,jour FROM concert WHERE artiste_id=$artiste_id and accord = 1 and jour<CURDATE() order by jour ") or die(print_r($bdd->errorInfo()));
// 	return $req;	
// }

function ConcertF($user, $id){
	global $bdd;
	$req = $bdd->query("SELECT nom, concert_id,jour FROM concert WHERE $user=$id and accord = 1 and jour>CURDATE() order by jour") or die(print_r($bdd->errorInfo()));
	return $req;	
}

// function ConcertArtisteF($artiste_id){
// 	global $bdd;
// 	$req = $bdd->query("SELECT nom, concert_id,jour FROM concert WHERE artiste_id=$artiste_id and accord = 1 and jour>CURDATE() order by jour") or die(print_r($bdd->errorInfo()));
// 	return $req;	
// }

function caroussel(){
	global $bdd;
	$req=$bdd->query("SELECT * from news where typenews != 3 and datenews>=CURDATE() order by news_id DESC limit 5");
	return $req;
}

function localnews(){
	global $bdd;
	$retour= array();
	$req = $bdd->query('SELECT * from concert where accord=1 and jour>= CURDATE() order by jour limit 6') or die(print_r($bdd->errorInfo()));
	foreach($req as $concert){
		$id=$concert['salle_id'];
		$sql=$bdd->query("SELECT code_postal, nom from salle where salle_id = '$id'");
		$postal = $sql->fetch();
		$concert['cp']= (int)($postal['code_postal']/1000);
		$concert['salle_nom']=$postal['nom'];
		$retour[] = $concert;
	}
	return $retour;

}

function listeac ($concert_id){
	global $bdd;
	$req = $bdd->query("SELECT artiste.nom, artiste.artiste_id FROM artiste INNER JOIN concert WHERE artiste.artiste_id = concert.artiste_id AND concert.accord = 1 AND concert.concert_id = '".$concert_id."'")
	or die(print_r($bdd->errorInfo()));
	return $req;
}
?>