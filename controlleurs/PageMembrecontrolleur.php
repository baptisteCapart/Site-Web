<?php

include ('models/membremodel.php');

$donnees = recuperer($_SESSION['id']);
$arr = explode('-', $donnees['date_de_naissance']);
$birthdate = $arr[2].'-'.$arr[1].'-'.$arr[0];
$ongletMembre =1;

if(isset($_GET['ongletMembre'])){

	if ($_GET["ongletMembre"] ==1){
		$ongletMembre=1;
	}	
	if ($_GET["ongletMembre"] ==2){
		$ongletMembre=2;
	}

	if ($_GET["ongletMembre"] ==3){
		$ongletMembre=3;
	}

	if ($_GET["ongletMembre"] ==4){
		$ongletMembre=4;
	}

}	



	include ('views/PageMembre.php');

 ?>