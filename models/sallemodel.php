<?php

function insert($Nom_de_salle, $code_postal, $ville ,$adresse, $type, $capacité,$photosalle, $membre_id){
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

function liste(){

	global $bdd;
 	$req = $bdd-> query('SELECT salle_id, nom FROM salle ORDER BY nom') or die(print_r($bdd->errorInfo()));
	return $req;

}

function Authentification($id){
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

?>