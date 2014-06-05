<?php 

include ('models/sallemodel.php');
include ('models/trimodel.php');


$critereSalle =1;

if(isset($_GET['critereSalle'])){

	if ($_GET["critereSalle"] ==1){
		$critereSalle=1;
		$listealpha = trialpha("salle");
	
	}	
	if ($_GET["critereSalle"] ==2){
		$critereSalle=2;
	}

}
// if(isset($_GET['lettre'])){
// 	$lettre = $_GET['lettre'];
// 	$LISTE = affichagesalle($lettre);
// }

// if(isset($_GET['code_postal'])){

// 	$code_postal = $_GET['code_postal'];
// 	$LISTE = departement($code_postal);
// }

include('controlleurs/bannierecontrolleur.php');
include ('views/listeSalles.php');
include('views/footer.php');

 ?>