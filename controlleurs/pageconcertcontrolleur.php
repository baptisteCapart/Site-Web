<?php 

 include ('models/concertmodel.php');
 include('models/sallemodel.php');
 include('models/artistemodel.php'); 
 include('models/membremodel.php');

$ongletConcert =1;
if (isset($_GET['id'])) {
	$concert_id = $_GET['id'];
	$donnees = recuperer5($concert_id);
}

$salle=recuperer3($donnees['salle_id']);
$LISTE=recuperer4($donnees['artiste_id']);
$listemembre=listeMembre($donnees['concert_id']);
$membreinfo = recuperer($listemembre);


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

if (isset($_POST['participer'])){
	participate($_SESSION['id'],$_GET['id']);
}
include('controlleurs/bannierecontrolleur.php');
include ('views/pageconcert.php');
include('views/footer.php');

 ?>