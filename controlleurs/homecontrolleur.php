<?php 
include('models/concertmodel.php');
include('models/membremodel.php');
include('models/photomodel.php');


$caroussel=caroussel();
if(isset($_SESSION['id'])){
	$membre = recuperer($_SESSION['id']);
	$code = (int)($membre['code_postal']/1000);
	$newsperso = newsperso($_SESSION['id']);
}

$localnews = localnews();



include("controlleurs/bannierecontrolleur.php");
include ('views/home.php');
include('views/footer.php');

 ?>