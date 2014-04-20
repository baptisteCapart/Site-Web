<?php 


function insertExtrait($artisteID, $nom){
	global $bdd;
	$bdd-> query("INSERT INTO extrait(nom, artiste_id)  VALUES ('$nom', '$artisteID')");
}

function listeMusiques(){
if (isset($_GET['id'])) {
	global $bdd;
 	$req = $bdd-> query('SELECT nom FROM extrait where artiste_id ='.$_GET["id"].'') or die(print_r($bdd->errorInfo()));
	return $req;
}
}

?>