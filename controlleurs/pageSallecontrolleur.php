<?php 

include ('models/sallemodel.php');
$_SESSION['salleID'] = $_GET['id'];
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

include ('views/pageSalle.php');

 ?>