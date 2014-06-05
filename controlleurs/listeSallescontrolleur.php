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
		$listeLieu = triLieu("salle");
	}

}


include('controlleurs/bannierecontrolleur.php');
include ('views/listeSalles.php');
include('views/footer.php');

 ?>