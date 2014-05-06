<?php


if(isset($_POST) && !empty($_POST['recherche'])){
  extract($_POST);

  include ('models/rechercheModel.php');


?>