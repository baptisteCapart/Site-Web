<?php 
include ('models/artistemodel.php');
include ('models/globalmodel.php');

if(isset($_GET['id'])){
	$_SESSION['artisteID'] = $_GET['id'];
}
$donnees = recupererdonnees('artiste', 'artiste_id', $_SESSION['artisteID']);

include("controlleurs/bannierecontrolleur.php");
include ('views/ParametresArtisteView.php');
include('views/footer.php');
 
 ?>