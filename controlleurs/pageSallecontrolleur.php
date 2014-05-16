<?php 

include ('models/sallemodel.php');
include ('models/SuivreModel.php');
include ('models/DonnerAvis.php');
include ('models/concertmodel.php');
include ('models/artistemodel.php');


if(isset($_GET['id'])){
	$createur=AuthentificationSalle($_GET["id"]);
	$salle_id=$_GET["id"];
	$notif = nouveauMessageS($salle_id);
	$concert=listeConcertsS($salle_id);
	$donnees = recuperer3($salle_id);
	$concertsalle = ConcertSalleP($salle_id);
	$concertsalle2 = ConcertSalleF($salle_id);

}

if(isset($_GET['id'])){
	$_SESSION['salleID'] = $_GET['id'];
}


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
	if ($_GET["ongletSalle"] ==6){
		$ongletSalle=6;
	}
}


if(isset($_GET['id'])){
	if(isset($_GET['note'])){
		if(isset($_POST['contenu'])){
				$contenu = $_POST['contenu'];
				$contenu = nl2br($contenu);
				$contenu = mysql_real_escape_string($contenu);
				AvisSalle($_SESSION['id'], $_SESSION['salleID'], $contenu, $_GET['note']);
			
		}
	}		
}
if(isset($_GET['id'])){
	$listeAvis = listeAvisSalle($_GET['id']);
}

if (isset($_POST['suivre'])){
	followSalle($_SESSION['id'], $_SESSION['salleID']);
}
if (isset($_SESSION['id'])){
	$follower=checkSalle($_SESSION['id'], $_SESSION['salleID']);
}

$NbAbonnes = NbAbonnesSalle($_SESSION['salleID']);

if (isset($_POST['stop'])){
	StopsuiviS($_SESSION['id'], $_SESSION['salleID']);
}

if(!empty($_POST['Nom_de_salle']) AND !empty ($_POST['code_postal']) AND !empty ($_POST['ville']) AND !empty ($_POST['adresse'])
 AND !empty ($_POST['type']) AND !empty ($_POST['capacité'])  ){


		$Nom_de_salle = mysql_real_escape_string(htmlspecialchars($_POST['Nom_de_salle']));
		$code_postal = mysql_real_escape_string(htmlspecialchars($_POST['code_postal']));
		$ville = mysql_real_escape_string(htmlspecialchars($_POST['ville']));
		$adresse = mysql_real_escape_string(htmlspecialchars($_POST['adresse']));
		$type = mysql_real_escape_string(htmlspecialchars($_POST['type']));		
		$capacité = mysql_real_escape_string(htmlspecialchars($_POST['capacité']));		
		$photosalle ="";

		if(!empty($_POST['photosalle'])){
			$photosalle = mysql_real_escape_string(htmlspecialchars($_POST['photosalle']));
		}

		if ($photosalle == ""){
			$photosalle = $donnees['photocover'];
		}
var_dump($photosalle);
		modifierSalle($_SESSION['salleID'], $Nom_de_salle, $code_postal ,$ville, $adresse, $type,$capacité,$photosalle);
}
include('controlleurs/bannierecontrolleur.php');
include ('views/pageSalle.php');
include('views/footer.php');

 ?>