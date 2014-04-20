<?php 


$critereConcert =1;

if(isset($_GET['critereConcert'])){

	if ($_GET["critereConcert"] ==1){
		$critereConcert=1;
	}	
	if ($_GET["critereConcert"] ==2){
		$critereConcert=2;
	}

}

include ('views/listeConcerts.php');

 ?>