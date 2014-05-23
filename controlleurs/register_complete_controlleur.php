<?php 

if(isset($_SESSION['format'])){
	$message = $_SESSION['format'];
}
include('bannierecontrolleur.php');
include('views/register_complete_view.php');
include('views/footer.php');
 ?>