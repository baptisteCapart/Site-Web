<?php 

include ('models/artistemodel.php');

$critere =1;

if(isset($_GET['critere'])){

	if ($_GET["critere"] ==1){
		$critere=1;
		$listealpha = trialpha();
	}	
	if ($_GET["critere"] ==2){
		$critere=2;
		$styles = getStyle();
	}
	if ($_GET["critere"] ==3){
		$critere=3;
		$notes = classement();
	}
}
else 
{
	$listealpha = trialpha();
}


include('controlleurs/bannierecontrolleur.php');
include ('views/listeartistes.php');
include('views/footer.php');
 ?>