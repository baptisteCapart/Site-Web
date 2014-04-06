<?php 

include ('models/artistemodel.php');


$listegroupe = liste();

$critere =1;

if(isset($_GET['critere'])){

	if ($_GET["critere"] ==1){
		$critere=1;
	}	
	if ($_GET["critere"] ==2){
		$critere=2;
	}

}

include ('views/listeartistes.php');

 ?>