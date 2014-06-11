<?php 

 include ('models/concertmodel.php');
 include('models/sallemodel.php');
 include('models/artistemodel.php'); 
 include('models/membremodel.php');
 include ('models/DonnerAvis.php');
 include ('models/globalmodel.php');



$ongletConcert =1;
if(isset($_GET['id'])){
	$_SESSION['concertID'] = $_GET['id'];
	$donnees = recupererdonnees("concert","concert_id",$_SESSION['concertID']);
	$dateconcert = new datetime($donnees['jour']);
	if(isset($_SESSION['id'])){
		$check = checkParticipation($_SESSION['id'],$_SESSION['concertID']);
		$artiste = MaPageArtiste($_SESSION['id']);
		$salle = MaPageSalle($_SESSION['id']);
		// var_dump($artiste);
		// var_dump($salle);
		// var_dump($donnees['artiste_id']);
		// var_dump($donnees['salle_id']);
	}	
	$listemembre=Membres($_SESSION['concertID']);
}
if (isset($_POST['participer'])){
	participate($_SESSION['id'],$_GET['id']);
}

$salle=recupererdonnees("salle","salle_id",$donnees['salle_id']);
$LISTE=listeac($donnees['concert_id']);

if(isset($_GET['id'])){
	if(isset($_GET['note'])){
		if(isset($_POST['contenu'])){
				$contenu = $_POST['contenu'];
				$contenu = nl2br($contenu);
				$contenu = mysql_real_escape_string($contenu);
				AvisConcert($_SESSION['id'], $_SESSION['concertID'], $contenu, $_GET['note']);
			
		}
	}		
}
if(isset($_GET['id'])){
	$listeAvis = listeAvisConcert($_GET['id']);
}


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