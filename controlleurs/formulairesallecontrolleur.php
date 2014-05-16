<?php 


if(!empty($_POST['Nom_de_salle']) AND !empty ($_POST['code_postal']) AND !empty ($_POST['ville']) AND !empty ($_POST['adresse'])
 AND !empty ($_POST['type']) AND !empty ($_POST['capacité'])){


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
		
		if(isset($_SESSION['id'])){
			insertSalle($Nom_de_salle, $code_postal ,$ville, $adresse, $type,$capacité,$photosalle, $_SESSION['id']);
		}


		include('controlleurs/bannierecontrolleur.php');
		include ('views/formulairesalle.php');
		include('views/footer.php');

}else{
		include('controlleurs/bannierecontrolleur.php');
		include ('views/formulairesalle.php');
		include('views/footer.php');
}
 ?>