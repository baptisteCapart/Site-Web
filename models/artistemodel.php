<?php 

function dropArtiste($id){
	global $bdd;
	$bdd->query("DELETE FROM artiste WHERE artiste_id= $id") or die(print_r($bdd->errorInfo()));
}


function insertArtiste($nomartiste, $style ,$description, $photogroupe,$membreID){
	global $bdd;
	$bdd-> query("INSERT INTO artiste(nom, description, photocover, membre_id)  VALUES ('$nomartiste', '$description', '$photogroupe' , '$membreID')") or die(print_r($bdd->errorInfo()));
	$req = $bdd->query("SELECT artiste_id FROM artiste WHERE membre_id = '$membreID'") or die(print_r($bdd->errorInfo()));
	$res = $req->fetch();
	return $res['artiste_id'] ;
}

function finishartiste ($artiste_id, $style){
	global $bdd;
	$bdd->query("INSERT INTO style_de_groupe (artiste_id, style_de_musique) VALUES ('$artiste_id', '$style')");
}

function photoA($id,$photo){
	global $bdd;
	$bdd->query("UPDATE artiste 
	SET photocover='$photo'
	WHERE artiste_id='$id'");
}

function trialpha(){
	global $bdd;
	$sql = $bdd-> query("SELECT * from artiste order by nom") or die(print_r($bdd->errorInfo()));
	return $sql;
}

function affichage($lettre){
	global $bdd;
	$sql = $bdd-> query("SELECT * from artiste where nom LIKE '$lettre%' order by nom") or die(print_r($bdd->errorInfo()));
	return $sql;
}

function recuperer2($id){
	global $bdd;
	$sql = "SELECT * from artiste where artiste_id ='$id'";
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req-> fetch();
  	return $donnee;
}

function recuperer4($id){
	global $bdd;
	$sql = "SELECT * from artiste where artiste_id ='$id'";
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	return $req;
}



function AuthentificationArtiste($id){
	global $bdd;
	$sql = 'SELECT membre_id from artiste where artiste_id ='.$_GET["id"].'';
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	$chef = $req-> fetch();
  	return $chef;
}


function PossedeArtiste($membre_id){
	global $bdd;
	$result = $bdd->query ("SELECT membre_id from artiste where membre_id = '$membre_id'");
	$result2 = $result->fetch();
	if (!$result2){
		return true;

	}else{
		return false;
	}

}

function MaPageArtiste($membre_id){
	global $bdd;
	$sql = "SELECT artiste_id from artiste where membre_id = '$membre_id' ";
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	$chef = $req-> fetch();
  	return $chef;
}


function modifierArtiste($id, $nom, $description ,$photogroupe){
	global $bdd;
	$bdd->query("UPDATE artiste 
		SET nom='$nom',
			description='$description',
			photocover='$photogroupe'

		WHERE artiste_id='$id'");
}



function classement(){
	global $bdd;
	$infos = array();
	$req = $bdd->query("SELECT artiste_id from donner_avis GROUP BY artiste_id order by note") or die (print_r($bdd->errorInfo()));
	foreach($req as $notes){
		$res = recuperer4($notes['artiste_id']);
		$artiste = $res->fetch();
		$infos[] = $artiste;
	}
	return $infos;	
}

function getStyle(){
	global $bdd;
	$req=$bdd->query("SELECT nom from style_de_musique order by nom");
	return $req;
}

function styleArtiste($style){
	global $bdd;
	$infos = array();
	$req =$bdd->query("SELECT artiste_id from style_de_groupe where style_de_musique = '$style'");
	foreach ($req as $artiste) {
		$res = recuperer4($artiste['artiste_id']);
		$infoartiste = $res->fetch();
		$infos[] = $infoartiste;
	}
	return $infos;
}

?>