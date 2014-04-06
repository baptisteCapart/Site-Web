<?php 

include ('models/sallemodel.php');


$listesalle = liste();

$critereSalle =1;

if(isset($_GET['critereSalle'])){

	if ($_GET["critereSalle"] ==1){
		$critereSalle=1;
	}	
	if ($_GET["critereSalle"] ==2){
		$critereSalle=2;
	}

}

include ('views/listeSalles.php');

 ?>