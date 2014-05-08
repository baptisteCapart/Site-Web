<?php 
include('models/concertmodel.php');

if(isset($_GET['id'])){

	$concert_id=$_GET['id'];
	$donnees = recuperer($concert_id);
	$listepost = listePost($donnees['topic_id']);
}

if($donnees['inviteur']==1){
	$inviteur=0;
}else{
	$inviteur=1;
}		

if(!empty($_POST['nom']) and !empty($_POST['jour']) and !empty($_POST['début'])){
		$photocover = "";
		$nom = mysql_real_escape_string(htmlspecialchars($_POST['nom']));
		$jour = $_POST['jour'];
		$description = mysql_real_escape_string(htmlspecialchars($_POST['description']));
		$début = $_POST['début'];
		$duree = $_POST['duree'];
		if(isset($_POST['message'])){
			$message = $_POST['message'];
			$message = nl2br($message);
			$message = mysql_real_escape_string($message);
			newpost($message,$donnees['topic_id']);
	
		}
		if(!empty($_POST['photocover'])){
			$photocover = mysql_real_escape_string(htmlspecialchars($_POST['photocover']));
		}

	updateConcert($nom, $jour ,$description, $début, $duree, $message, $photocover, $concert_id, $inviteur);

		include('controlleurs/bannierecontrolleur.php');
		include ('views/modifierconcertView.php');
		include('views/footer.php');
	}else{

		include('controlleurs/bannierecontrolleur.php');
		include ('views/modifierconcertView.php');
		include('views/footer.php');
}
 ?>