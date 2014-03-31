<?php 


if(!empty($_POST['nomartiste']) AND !empty ($_POST['description']) AND !empty ($_POST['style']) AND !empty ($_POST['photogroupe'])){

require ('../connectbdd.php');

		$nomartiste = mysql_real_escape_string(htmlspecialchars($_POST['nomartiste']));
		$style = mysql_real_escape_string(htmlspecialchars($_POST['style']));
		$photogroupe = mysql_real_escape_string(htmlspecialchars($_POST['photogroupe']));
		$description = mysql_real_escape_string(htmlspecialchars($_POST['description']));
		$photogroupe ="";
		if(!empty($_POST['photogroupe'])){
		$photogroupe = mysql_real_escape_string(htmlspecialchars($_POST['photogroupe']));
		}

include ('../models/artistemodel.php');

insert($nomartiste, $style ,$description, $photogroupe);



include ('../views/formulairegroupe.php');
}else{
include ('../views/formulairegroupe.php');
}
 ?>