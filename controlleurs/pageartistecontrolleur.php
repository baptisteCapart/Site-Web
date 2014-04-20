<?php 

include ('models/artistemodel.php');
include ('models/extraitModel.php');

$donnees = recuperer2();

if(!empty($_POST['extrait1']) and!empty($_POST['extrait2']) ){

	// $extrait1 = mysql_real_escape_string(htmlspecialchars($_POST['extrait1']));
	// $extrait1 = mysql_real_escape_string(htmlspecialchars($_POST['extrait2']));
	// $extrait1 ="";
	// $extrait2 ="";		
		if(!empty($_POST['extrait1'])){
			$extrait1 = mysql_real_escape_string(htmlspecialchars($_POST['extrait1']));
		}
		if(!empty($_POST['extrait2'])){
			$extrait2 = mysql_real_escape_string(htmlspecialchars($_POST['extrait2']));
		}		
		if(isset($_GET['id'])){
			insertExtrait($_GET['id'], $extrait1);
			insertExtrait($_GET['id'], $extrait2);
		}
}

if(isset($_GET['id'])){
	$_SESSION['artisteID'] = $_GET['id'];
}

$musiques = listeMusiques();
$onglet =1;

if(isset($_GET['onglet'])){

	if ($_GET["onglet"] ==1){
		$onglet=1;
	}	
	if ($_GET["onglet"] ==2){
		$onglet=2;
	}

	if ($_GET["onglet"] ==3){
		$onglet=3;
	}

	if ($_GET["onglet"] ==4){
		$onglet=4;
	}

	if ($_GET["onglet"] ==5){
		$onglet=5;
	}
}

include ('views/pageartiste.php');
 ?>