<?php 

include ('models/artistemodel.php');


$listegroupe = listeArtiste();

$critere =1;

if(isset($_GET['critere'])){

	if ($_GET["critere"] ==1){
		$critere=1;
	}	
	if ($_GET["critere"] ==2){
		$critere=2;
	}

}

include('controlleurs/bannierecontrolleur.php');
include ('views/listeartistes.php');
include('views/footer.php');
 ?>