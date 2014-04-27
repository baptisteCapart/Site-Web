<?php

function insertSalle($Nom_de_salle, $code_postal, $ville ,$adresse, $type, $capacité,$photosalle, $membre_id){
	global $bdd;
	$bdd->query("INSERT INTO salle(nom, code_postal, ville, adresse, type, capacite, photocover, membre_id )  VALUES ('$Nom_de_salle', '$code_postal', '$ville' ,'$adresse' ,'$type', '$capacité','$photosalle', '$membre_id')");
}

function recuperer3(){

if (isset($_GET['id'])) {
	global $bdd;
	$sql = 'SELECT * from salle where salle_id ='.$_GET["id"].'';
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req-> fetch();
  	return $donnee;
  }
}

function listeSalle(){

	global $bdd;
 	$req = $bdd-> query('SELECT * FROM salle ORDER BY nom') or die(print_r($bdd->errorInfo()));
	return $req;

}

function AuthentificationSalle($id){
	global $bdd;
	$sql = 'SELECT membre_id from salle where salle_id ='.$_GET["id"].'';
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	$chef = $req-> fetch();
  	return $chef;
}


function modifierSalle($id, $nom, $code_postal ,$ville, $adresse, $type, $capacité, $photosalle){
	global $bdd;
	$bdd->query("UPDATE salle 
		SET nom='$nom',
			code_postal='$code_postal',
			ville='$ville',
			adresse='$adresse',
			type='$type',
			capacite='$capacité',
			photocover='$photosalle'

		WHERE salle_id='$id'");
}


function PossedeSalle($membre_id){
	global $bdd;
	$result = $bdd->query ("SELECT membre_id from salle where membre_id = '$membre_id'");
	$result2 = $result->fetch();
	if (!$result2){
		return true;

	}else{
		return false;
	}

}


function MaPageSalle($membre_id){
	global $bdd;
	$sql = "SELECT salle_id from salle where membre_id = '$membre_id'";
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	$chef = $req-> fetch();
  	return $chef;
}


?>