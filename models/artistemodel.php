<?php 


function insert($nomartiste, $style ,$description, $photogroupe){
	mysql_query("INSERT INTO artiste(nom, description, photocover)  VALUES ('$nomartiste', '$description', '$photogroupe')");
}



function recuperer($id){
	$sql = ("SELECT * from membre where nom ='$nomartiste'");
 	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
 	
  	$donnee = mysql_fetch_assoc($req);
  	return $donnee;
}

function liste(){
	$sql = ("SELECT nom from artiste");
	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
  	$donnee = mysql_fetch_assoc($req);
  	return $donnee;	
}

 ?>