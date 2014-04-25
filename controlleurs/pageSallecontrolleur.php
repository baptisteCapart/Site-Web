<?php 

include ('models/sallemodel.php');
include ('models/SuivreModel.php');

if(isset($_GET['id'])){
	$createur=Authentification($_GET["id"]);
}

if(isset($_GET['id'])){
	$_SESSION['salleID'] = $_GET['id'];
}

$donnees = recuperer3();
$ongletSalle =1;

if(isset($_GET['ongletSalle'])){

	if ($_GET["ongletSalle"] ==1){
		$ongletSalle=1;
	}	
	if ($_GET["ongletSalle"] ==2){
		$ongletSalle=2;
	}

	if ($_GET["ongletSalle"] ==3){
		$ongletSalle=3;
	}

	if ($_GET["ongletSalle"] ==4){
		$ongletSalle=4;
	}

	if ($_GET["ongletSalle"] ==5){
		$ongletSalle=5;
	}
}

if (isset($_POST['suivre'])){
	followSalle($_SESSION['id'], $_SESSION['salleID']);
}
if (isset($_SESSION['id'])){
	$follower=checkSalle($_SESSION['id'], $_SESSION['salleID']);
}

$NbAbonnes = NbAbonnesSalle($_SESSION['salleID']);



include ('views/pageSalle.php');

 ?>