<?php

function dropSalle($id){
	global $bdd;
	$bdd->query("DELETE FROM salle WHERE salle_id= $id") or die(print_r($bdd->errorInfo()));
}

function insertSalle($Nom_de_salle, $code_postal, $telephone,$ville ,$adresse, $type, $capacité,$photosalle, $membre_id){
	global $bdd;
	$bdd->query("INSERT INTO salle(nom, code_postal, telephone, ville, adresse, type, capacite, photocover, membre_id )  VALUES ('$Nom_de_salle', '$code_postal', '$telephone', '$ville' ,'$adresse' ,'$type', '$capacité','$photosalle', '$membre_id')") or die(print_r($bdd->errorInfo()));
	$req = $bdd->query("SELECT salle_id FROM salle WHERE membre_id = '$membre_id'") or die(print_r($bdd->errorInfo()));
	$res = $req->fetch();
	var_dump($res['salle_id']);
	return $res['salle_id'] ;
}

function photoCS($id,$photo){
	global $bdd;
	$bdd->query("UPDATE salle 
	SET photocover='$photo'
	WHERE salle_id='$id'");
}

function affichagesalle($lettre){
	global $bdd;
	$sql = $bdd-> query("SELECT * from salle where nom LIKE '$lettre%' order by nom");
	return $sql;
}

function departement($code_postal){
	global $bdd;
	$sql = $bdd-> query("SELECT * from salle where convert(code_postal,char(16)) LIKE '$code_postal%' order by nom");
	return $sql;	
}



// function recuperer3($id){

// 	global $bdd;
// 	$sql = "SELECT * from salle where salle_id ='$id'";
//  	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
//  	$donnee = $req-> fetch();
//   	return $donnee;
  
// }


function AuthentificationSalle($id){
	global $bdd;
	$sql = "SELECT membre_id from salle where salle_id ='$id'";
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