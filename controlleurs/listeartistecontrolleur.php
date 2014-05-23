<?php 

include ('models/artistemodel.php');

$notes = classement();

$critere =1;

if(isset($_GET['critere'])){

	if ($_GET["critere"] ==1){
		$critere=1;
	}	
	if ($_GET["critere"] ==2){
		$critere=2;
	}
	if ($_GET["critere"] ==3){
		$critere=3;
	}
}

// if(isset($_GET['lettre'])){
// 	$lettre = $_GET['lettre'];
// }
// else
// {
// 	$lettre = 'a';
// }
// $LISTE = affichage($lettre);



include('controlleurs/bannierecontrolleur.php');
include ('views/listeartistes.php');
include('views/footer.php');
 ?>