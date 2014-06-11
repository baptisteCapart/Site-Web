<?php 
include('models/concertmodel.php');
include('models/trimodel.php');

$critereConcert =1;

if(isset($_GET['critereConcert'])){

	if ($_GET["critereConcert"] ==1){
		$critereConcert=1;
		$listeDate = triDate();
	}	
	if ($_GET["critereConcert"] ==2){
		$critereConcert=2;
		$listedep = triconcertlieu();
	}

}

include('controlleurs/bannierecontrolleur.php');
include ('views/listeConcerts.php');
include('views/footer.php');

 ?>