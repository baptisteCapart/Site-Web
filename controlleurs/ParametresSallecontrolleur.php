<?php 
include ('models/sallemodel.php');
include ('models/globalmodel.php');

if(isset($_GET['id'])){
	$_SESSION['salleID'] = $_GET['id'];
}
$donnees = recupererdonnees('salle', 'salle_id', $_SESSION['salleID']);

include("controlleurs/bannierecontrolleur.php");
include ('views/ParametresSalleView.php');
include('views/footer.php');
 
 ?>