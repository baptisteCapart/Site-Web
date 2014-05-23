<?php 

function dropArtiste($id){
	global $bdd;
	$bdd->query("DELETE FROM artiste WHERE artiste_id= $id") or die(print_r($bdd->errorInfo()));
}


function insertArtiste($nomartiste, $style ,$description, $photogroupe,$membreID){
	global $bdd;
	$bdd-> query("INSERT INTO artiste(nom, description, photocover, membre_id)  VALUES ('$nomartiste', '$description', '$photogroupe' , '$membreID')") or die(print_r($bdd->errorInfo()));
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

	$req = $bdd->query("SELECT AVG(note), artiste_id from donner_avis GROUP BY artiste_id order by note");
	var_dump($req);
	foreach($req as $notes){
		$infos = recuperer4($notes['artiste_id']);
	}
	return $infos;	
}

 ?>