<?php
function follow ($membre_id, $artiste_id){
	global $bdd;
	$bdd-> query("INSERT INTO suivre(membre_id, artiste_id)  VALUES ('$membre_id', '$artiste_id')");	
}

function check($membre_id, $artiste_id){
	global $bdd;
	$sql = $bdd->query("SELECT membre_id from suivre where artiste_id=$artiste_id and membre_id = $membre_id") or die(print_r($bdd->errorInfo()));
	$req = $sql->fetch();
	if (!$req){
		return true;

	}else{
		return false;
	}
}

function NbAbonnes($artiste_id){
	global $bdd;
	$sql = $bdd-> query("SELECT COUNT(membre_id) as Nb from suivre  where artiste_id='$artiste_id'")  or die(print_r($bdd->errorInfo()));
	$req = $sql->fetchColumn();
	return	$req;	
}


function ArtistesSuivis($membre_id){
	
	global $bdd;
	$req = $bdd->query("SELECT artiste.nom, artiste.artiste_id FROM artiste, suivre WHERE suivre.artiste_id = artiste.artiste_id AND suivre.membre_id=$membre_id") or die(print_r($bdd->errorInfo()));
	return $req;
}

?>