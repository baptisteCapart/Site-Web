<?php 


if(!empty($_POST['Nom_de_salle']) AND !empty ($_POST['code_postal']) AND !empty ($_POST['ville']) AND !empty ($_POST['adresse'])
 AND !empty ($_POST['type']) AND !empty ($_POST['capacité']) AND !empty ($_POST['photosalle'])){


		$Nom_de_salle = mysql_real_escape_string(htmlspecialchars($_POST['Nom_de_salle']));
		$code_postal = mysql_real_escape_string(htmlspecialchars($_POST['code_postal']));
		$ville = mysql_real_escape_string(htmlspecialchars($_POST['ville']));
		$adresse = mysql_real_escape_string(htmlspecialchars($_POST['adresse']));
		$type = mysql_real_escape_string(htmlspecialchars($_POST['type']));		
		$capacité = mysql_real_escape_string(htmlspecialchars($_POST['capacité']));		

		$photosalle ="";
		if(!empty($_POST['photosalle'])){
		$photosalle = mysql_real_escape_string(htmlspecialchars($_POST['photosalle']));
		}

include ('models/sallemodel.php');

insert($Nom_de_salle, $code_postal ,$ville, $adresse, $type,$capacité,$photosalle);



include ('views/formulairesalle.php');
}else{
include ('views/formulairesalle.php');
}
 ?>