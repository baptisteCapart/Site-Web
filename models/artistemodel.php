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
 	$req = $bdd-> query('SELECT nom FROM artiste ORDER BY nom') or die(print_r($bdd->errorInfo()));

 	foreach ($req as $valeur ) {
 		echo $valeur["nom"].'<br/>';
 	}

}

 ?>