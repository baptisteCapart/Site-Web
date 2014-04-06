<?php

function insert($Nom_de_salle, $code_postal, $ville ,$adresse, $type, $capacité,$photosalle){
	global $bdd;

	$bdd->query("INSERT INTO salle(nom, code_postal, ville, adresse, type, capacite, photocover )  VALUES ('$Nom_de_salle', '$code_postal', '$ville' ,'$adresse' ,'$type', '$capacité','$photosalle')");
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

?>