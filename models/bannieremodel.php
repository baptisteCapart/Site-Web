<?php 

function verification($login){
	$sql = ("SELECT mot_de_passe from membre where pseudo ='$login'");
 	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
 	
  	$donnee = mysql_fetch_assoc($req);
  	var_dump($donnee);
  	return $donnee;
 

}

 ?>