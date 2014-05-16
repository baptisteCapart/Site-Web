<?php 

 include ('models/concertmodel.php');
 include('models/sallemodel.php');
 include('models/artistemodel.php'); 
 include('models/membremodel.php');

$ongletConcert =1;
if(isset($_GET['id'])){
	$_SESSION['concertID'] = $_GET['id'];
	$donnees = recuperer5($_SESSION['concertID']);
	if(isset($_SESSION['id'])){
		$check = checkParticipation($_SESSION['id'],$_SESSION['concertID']);
	}	
	$listemembre=Membres($_SESSION['concertID']);
}
if (isset($_POST['participer'])){
	participate($_SESSION['id'],$_GET['id']);
}

$salle=recuperer3($donnees['salle_id']);
$LISTE=recuperer4($donnees['artiste_id']);




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