<?php 


function insert($nomartiste, $style ,$description, $photogroupe){
	global $bdd;
	$bdd-> query("INSERT INTO artiste(nom, description, photocover)  VALUES ('$nomartiste', '$description', '$photogroupe')");
}



function recuperer2($id){
	global $bdd;
	$sql = "SELECT * from artiste where nom ='$nomartiste'";
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	
  	$donnee = $req-> fetch();
  	return $donnee;
}

function liste(){
	global $bdd;
 	$req = $bdd-> query("SELECT nom FROM artiste ORDER BY nom") or die(print_r($bdd->errorInfo()));
 	$tableauretour = array();
 	$end = false;
 	while ($end == false) {
 		$test = $req->fetch;
 		if ($test == false){
 			$end = true;
 		} else {
 			$tableauretour[] = $test;
 		}
 	}
 	return $tableauretour;
}

 ?>