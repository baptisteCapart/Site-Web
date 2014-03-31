<?php

function insert($Nom_de_salle, $code_postal, $ville ,$adresse, $type, $capacité,$photosalle){
	global $bdd;

	$bdd->query("INSERT INTO salle(nom, code_postal, ville, adresse, type, capacite, photocover )  VALUES ('$Nom_de_salle', '$code_postal', '$ville' ,'$adresse' ,'$type', '$capacité','$photosalle')");
}

?>