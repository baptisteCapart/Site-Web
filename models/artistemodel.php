<?php 


function insert($nomartiste, $style ,$description, $photogroupe){
	global $bdd;
	$bdd-> query("INSERT INTO artiste(nom, description, photocover)  VALUES ('$nomartiste', '$description', '$photogroupe')");
}



function recuperer2(){

	global $bdd;
	$sql = 'SELECT * from artiste where artiste_id ='.$_GET["id"].'';
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req-> fetch();
  	return $donnee;
}

function liste(){

	global $bdd;
 	$req = $bdd-> query('SELECT artiste_id, nom FROM artiste ORDER BY nom') or die(print_r($bdd->errorInfo()));
	return $req;

}

 ?>