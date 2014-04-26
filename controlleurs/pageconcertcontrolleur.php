<?php 

// include ('models/sallemodel.php');
// $_SESSION['salleID'] = $_GET['id'];
// $donnees = recuperer3();
$ongletConcert =1;

if(isset($_GET['ongletConcert'])){

	if ($_GET["ongletConcert"] ==1){
		$ongletConcert=1;
	}	
	if ($_GET["ongletConcert"] ==2){
		$ongletConcert=2;
	}

	if ($_GET["ongletConcert"] ==3){
		$ongletConcert=3;
	}

	if ($_GET["ongletConcert"] ==4){
		$ongletConcert=4;
	}

	if ($_GET["ongletConcert"] ==5){
		$ongletConcert=5;
	}
}


include('controlleurs/bannierecontrolleur.php');
include ('views/pageconcert.php');
include('views/footer.php');

 ?>