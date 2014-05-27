<?php 

if(isset($_SESSION['format'])){
	$message = $_SESSION['format'];
}
if(isset($_SESSION['format2'])){
	$message2 = $_SESSION['format2'];
}
include('bannierecontrolleur.php');
include('views/register_complete_view.php');
include('views/footer.php');
 ?>