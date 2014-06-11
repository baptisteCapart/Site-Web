<?php 
include ('models/membremodel.php');
include ('models/globalmodel.php');

$donnees = recupererdonnees('membre', 'membre_id', $_SESSION['id']);

include("controlleurs/bannierecontrolleur.php");
include ('views/ParametresMembreView.php');
include('views/footer.php');
 
 ?>