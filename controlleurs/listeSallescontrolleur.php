<?php 

include ('models/sallemodel.php');


$listesalle = listeSalle();

$critereSalle =1;

if(isset($_GET['critereSalle'])){

	if ($_GET["critereSalle"] ==1){
		$critereSalle=1;
	}	
	if ($_GET["critereSalle"] ==2){
		$critereSalle=2;
	}

}


include('controlleurs/bannierecontrolleur.php');
include ('views/listeSalles.php');
include('views/footer.php');

 ?>