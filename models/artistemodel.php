<?php 


function insert($nomartiste, $style ,$description, $photogroupe){
	global $bdd;
	$bdd-> query("INSERT INTO artiste(nom, description, photocover)  VALUES ('$nomartiste', '$description', '$photogroupe')");
}



function recuperer2($id){
	$sql = "SELECT * from artiste where nom ='$nomartiste'";
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	
  	$donnee = $req-> fetch();
  	return $donnee;
}

function liste(){
	$sql = "SELECT nom from artiste";
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	
  	$donnee = $req-> fetch();
  	return $donnee;
}

 ?>