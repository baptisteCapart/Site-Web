<?php 

include ('models/membremodel.php');

$donnees = recuperer($_SESSION['id']);

include("controlleurs/bannierecontrolleur.php");
include ('views/ParametresMembreView.php');
include('views/footer.php');
 
 ?>