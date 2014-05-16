<?php
function followArtiste ($membre_id, $artiste_id){
	global $bdd;
	$bdd-> query("INSERT INTO suivre(membre_id, artiste_id)  VALUES ('$membre_id', '$artiste_id')");	
}

function followSalle ($membre_id, $salle_id){
	global $bdd;
	$bdd-> query("INSERT INTO suivre(membre_id, salle_id)  VALUES ('$membre_id', '$salle_id')");	
}

function checkArtiste($membre_id, $artiste_id){
	global $bdd;
	$sql = $bdd->query("SELECT membre_id from suivre where artiste_id=$artiste_id and membre_id = $membre_id") or die(print_r($bdd->errorInfo()));
	$req = $sql->fetch();
	if (!$req){
		return true;

	}else{
		return false;
	}
}

function checkSalle($membre_id, $salle_id){
	global $bdd;
	$sql = $bdd->query("SELECT membre_id from suivre where salle_id=$salle_id and membre_id = $membre_id") or die(print_r($bdd->errorInfo()));
	$req = $sql->fetch();
	if (!$req){
		return true;

	}else{
		return false;
	}
}

function NbAbonnesArtiste($artiste_id){
	global $bdd;
	$sql = $bdd-> query("SELECT COUNT(membre_id) as Nb from suivre  where artiste_id='$artiste_id'")  or die(print_r($bdd->errorInfo()));
	$req = $sql->fetchColumn();
	return	$req;	
}

function NbAbonnesSalle($salle_id){
	global $bdd;
	$sql = $bdd-> query("SELECT COUNT(membre_id) as Nb from suivre  where salle_id='$salle_id'")  or die(print_r($bdd->errorInfo()));
	$req = $sql->fetchColumn();
	return	$req;	
}


function ArtistesSuivis($membre_id){
	
	global $bdd;
	$req = $bdd->query("SELECT artiste.nom, artiste.artiste_id FROM artiste, suivre WHERE suivre.artiste_id = artiste.artiste_id AND suivre.membre_id=$membre_id") or die(print_r($bdd->errorInfo()));
	return $req;
}

function SallesSuivies($membre_id){
	
	global $bdd;
	$req = $bdd->query("SELECT salle.nom, salle.salle_id FROM salle, suivre WHERE suivre.salle_id = salle.salle_id AND suivre.membre_id=$membre_id") or die(print_r($bdd->errorInfo()));
	return $req;
}

function StopsuiviA($membre_id, $artiste_id){
	global $bdd;
	$req=$bdd->query("DELETE from suivre where membre_id=$membre_id and artiste_id=$artiste_id");
}

function StopsuiviS($membre_id, $salle_id){
	global $bdd;
	$req=$bdd->query("DELETE from suivre where membre_id=$membre_id and salle_id=$salle_id");
}

?>