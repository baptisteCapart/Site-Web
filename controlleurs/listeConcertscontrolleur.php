<?php 
include('models/concertmodel.php');

$critereConcert =1;
$liste = listeConcerts();

if(isset($_GET['critereConcert'])){

	if ($_GET["critereConcert"] ==1){
		$critereConcert=1;
	}	
	if ($_GET["critereConcert"] ==2){
		$critereConcert=2;
	}

}

include('controlleurs/bannierecontrolleur.php');
include ('views/listeConcerts.php');
include('views/footer.php');

 ?>