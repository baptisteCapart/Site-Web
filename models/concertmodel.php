<?php 

function insertConcert($nom, $jour ,$description, $début, $duree, $message, $photocover, $salle_id, $artiste_id, $inviteur,$non_repondu)
{
	global $bdd;
	$topic_id = newtopic();
	$bdd->query("INSERT INTO concert(nom, jour, heure, duree, description, message, salle_id, artiste_id, photocover, topic_id, inviteur, non_repondu) 
		VALUES ('$nom', '$jour', '$début', '$duree', '$description', '$message', '$salle_id', '$artiste_id', '$photocover', '$topic_id', '$inviteur','$non_repondu')") or die(print_r($bdd->errorInfo()));
	newpost($message,$topic_id);
}

function listeConcerts(){
	global $bdd;
	$result= $bdd->query ("SELECT concert_id, nom, photocover from concert where accord = 1");
	return $result;	
}

function listeConcertsA($id){
	global $bdd;
	$result= $bdd->query ("SELECT concert_id, nom, salle_id from concert where artiste_id = '$id' and non_repondu ='artiste' and inviteur = 0 and accord = 0");
	return $result;
}

function listeConcertsS($id){
	global $bdd;
	$result= $bdd->query ("SELECT concert_id, nom, artiste_id from concert where salle_id = '$id' and non_repondu = 'salle' and inviteur = 1 and accord = 0");
	return $result;
}

function nouveauMessageA($id){
	global $bdd;
	$result= $bdd->query ("SELECT artiste_id from concert where artiste_id = '$id' and non_repondu ='artiste' and inviteur = 0 and accord = 0");
	$result2 = $result->fetch();
	if (!$result2){
		return false;

	}else{
		return true;
	}
}
function nouveauMessageS($id){
	global $bdd;
	$result = $bdd->query ("SELECT concert_id from concert where salle_id = '$id' and non_repondu = 'salle' and inviteur = 1 and accord = 0");
	$result2 = $result->fetch();
	if (!$result2){
		return false;

	}else{
		return true;
	}
}


function recuperer5($id){
	global $bdd;
	$sql = "SELECT * from concert where concert_id ='$id'";
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
  	$donnee = $req-> fetch();
  	return $donnee;
}

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
	$concert = recuperer5($id);
	$artiste = recupererartiste($concert['artiste_id']);
	$description = "Tout nouveau concert de ".$artiste['nom']." prévu pour ".$concert['jour'].", tenez-vous prêts !";
	$bdd->query("INSERT INTO news (datenews, photocover, description, lien) 
		VALUES ('".$concert['jour']."', '".$concert['photocover']."', '$description', 'index.php?page=pageconcertcontrolleur&id=".$concert['concert_id']."')") or die (print_r($bdd->errorInfo()));
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

function ConcertSalleP($salle_id){
	global $bdd;
	$req = $bdd->query("SELECT nom, concert_id FROM concert WHERE salle_id=$salle_id and accord = 1 and jour<CURDATE() ") or die(print_r($bdd->errorInfo()));
	return $req;	
}

function ConcertArtisteP($artiste_id){
	global $bdd;
	$req = $bdd->query("SELECT nom, concert_id FROM concert WHERE artiste_id=$artiste_id and accord = 1 and jour<CURDATE() ") or die(print_r($bdd->errorInfo()));
	return $req;	
}

function ConcertSalleF($salle_id){
	global $bdd;
	$req = $bdd->query("SELECT nom, concert_id FROM concert WHERE salle_id=$salle_id and accord = 1 and jour>CURDATE() ") or die(print_r($bdd->errorInfo()));
	return $req;	
}

function ConcertArtisteF($artiste_id){
	global $bdd;
	$req = $bdd->query("SELECT nom, concert_id FROM concert WHERE artiste_id=$artiste_id and accord = 1 and jour>CURDATE()") or die(print_r($bdd->errorInfo()));
	return $req;	
}

function caroussel(){
	global $bdd;
	$req=$bdd->query("SELECT photocover from concert order by jour limit 5");
	return $req;
}

function recupererartiste($id){
	global $bdd;
	$sql = "SELECT * from artiste where artiste_id ='$id'";
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req-> fetch();
  	return $donnee;
}

?>