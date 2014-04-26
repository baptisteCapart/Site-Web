<?php 

include ('models/sallemodel.php');
if(isset($_GET['id'])){
	$_SESSION['salleID'] = $_GET['id'];
}
$donnees = recuperer3($_SESSION['salleID']);

include("controlleurs/bannierecontrolleur.php");
include ('views/ParametresSalleView.php');
include('views/footer.php');
 
 ?>