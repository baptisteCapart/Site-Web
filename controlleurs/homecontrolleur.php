<?php 
include('models/concertmodel.php');
include('models/membremodel.php');
include('models/photomodel.php');


$caroussel=caroussel();
if(isset($_SESSION['id'])){
	$membre = recuperer($_SESSION['id']);
	$code = (int)($membre['code_postal']/1000);
	$newsperso = newspersoA($_SESSION['id']);
	$newsperso2 = newspersoS($_SESSION['id']);
	// $newsperso = newsp($_SESSION['id'],"artiste_id");
	// $newsperso2 = newsp($_SESSION['id'],"salle_id");
}

$localnews = localnews();



include("controlleurs/bannierecontrolleur.php");
include ('views/home.php');
include('views/footer.php');

 ?>