<?php 

include ('models/artistemodel.php');
if(isset($_GET['id'])){
	$_SESSION['artisteID'] = $_GET['id'];
}
$donnees = recuperer2($_SESSION['artisteID']);

include("controlleurs/bannierecontrolleur.php");
include ('views/ParametresArtisteView.php');
include('views/footer.php');
 
 ?>