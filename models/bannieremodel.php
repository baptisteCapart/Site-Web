<?php 

function verification($login){
	$sql = ("SELECT membre_id, mot_de_passe from membre where pseudo ='$login'");
 	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
 	
  	$donnee = mysql_fetch_assoc($req);
  	return $donnee;
}

function recuperer($id){
	$sql = ("SELECT * from membre where membre_id ='$id'");
 	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
 	
  	$donnee = mysql_fetch_assoc($req);
  	return $donnee;
}

 ?>