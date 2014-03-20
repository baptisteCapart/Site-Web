<?php 

function verification($login){
	$sql = "SELECT mot_de_passe from membre where pseudo='".$login."'";
 	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

  	$data = mysql_fetch_assoc($req);
}

 ?>