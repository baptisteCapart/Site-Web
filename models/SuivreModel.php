<?php
function follow ($membre_id, $user, $userID){
	global $bdd;
	$bdd-> query("INSERT INTO suivre(membre_id, $user)  VALUES ('$membre_id', '$userID')");	
}

// function followSalle ($membre_id, $salle_id){
// 	global $bdd;
// 	$bdd-> query("INSERT INTO suivre(membre_id, salle_id)  VALUES ('$membre_id', '$salle_id')");	
// }

// function followMembre ($membre_id, $ami_id){
// 	global $bdd;
// 	$bdd-> query("INSERT INTO suivre(membre_id, ami_id)  VALUES ('$membre_id', '$ami_id')");	
// }

function checkSuivi($user,$membre_id, $userID){
	global $bdd;
	$sql = $bdd->query("SELECT membre_id from suivre where $user=$userID and membre_id = $membre_id") or die(print_r($bdd->errorInfo()));
	$req = $sql->fetch();
	if (!$req){
		return true;

	}else{
		return false;
	}
}

// function checkSalle($membre_id, $salle_id){
// 	global $bdd;
// 	$sql = $bdd->query("SELECT membre_id from suivre where salle_id=$salle_id and membre_id = $membre_id") or die(print_r($bdd->errorInfo()));
// 	$req = $sql->fetch();
// 	if (!$req){
// 		return true;

// 	}else{
// 		return false;
// 	}
// }

// function checkMembre($membre_id, $ami_id){
// 	global $bdd;
// 	$sql = $bdd->query("SELECT membre_id from suivre where ami_id=$ami_id and membre_id = $membre_id") or die(print_r($bdd->errorInfo()));
// 	$req = $sql->fetch();
// 	if (!$req){
// 		return true;

// 	}else{
// 		return false;
// 	}
// }

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


function ProfilsSuivis($table,$userID,$membre_id){
	
	global $bdd;
	$req = $bdd->query("SELECT $table.nom, $table.$userID FROM $table, suivre WHERE suivre.$userID = $table.$userID AND suivre.membre_id=$membre_id") or die(print_r($bdd->errorInfo()));
	return $req;
}

// function SallesSuivies($table,$userID,$membre_id){
	
// 	global $bdd;
// 	$req = $bdd->query("SELECT $table.nom, $table.$userID FROM $table, suivre WHERE suivre.$userID = $table.$userID AND suivre.membre_id=$membre_id") or die(print_r($bdd->errorInfo()));
// 	return $req;
// }

function MembresSuivis($membre_id){
	
	global $bdd;
	$req = $bdd->query("SELECT membre.pseudo, membre.membre_id FROM membre, suivre WHERE suivre.ami_id = membre.membre_id AND suivre.membre_id=$membre_id") or die(print_r($bdd->errorInfo()));
	return $req;
}

function Stopsuivi($membre_id, $user,$userID){
	global $bdd;
	$req=$bdd->query("DELETE from suivre where membre_id=$membre_id and $user=$userID");
}

// function StopsuiviS($membre_id, $salle_id){
// 	global $bdd;
// 	$req=$bdd->query("DELETE from suivre where membre_id=$membre_id and salle_id=$salle_id");
// }
// function StopsuiviM($membre_id, $ami_id){
// 	global $bdd;
// 	$req=$bdd->query("DELETE from suivre where membre_id=$membre_id and ami_id=$ami_id");
// }

?>