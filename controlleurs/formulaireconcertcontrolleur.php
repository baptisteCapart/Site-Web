<?php 

if(isset($_GET['invite'])){

	$invite=$_GET['invite'];
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
		}
		if(!empty($_POST['photocover'])){
			$photocover = mysql_real_escape_string(htmlspecialchars($_POST['photocover']));
		}

		include ('models/concertmodel.php');

if(isset($_GET['new'])){

		if($_GET['new']=='new'){
			if(isset($_GET['invite'])){
				if($invite == 'artiste')
				{
					$artiste_id = $_GET['id'];
					$salle_id = $_SESSION['salle_id']['salle_id'];
					$inviteur = 0;
					$non_repondu = 'artiste';
				}
				else
				{
					$salle_id = $_GET['id'];
					$artiste_id = $_SESSION['artiste_id']['artiste_id'];
					$inviteur = 1;
					$non_repondu = 'salle';
				}
			}
			insertConcert($nom, $jour ,$description, $début, $duree, $message, $photocover, $salle_id, $artiste_id, $inviteur,$non_repondu);
		
	
		}else{

			if(isset($_GET['concert_id'])){
				$id = $_GET['concert_id'];
				updateConcert($nom, $jour ,$description, $début, $duree, $message, $photocover, $id);
			}
		}
}
		include('controlleurs/bannierecontrolleur.php');
		include ('views/formulaireconcertview.php');
		include('views/footer.php');		

}else{

		include('controlleurs/bannierecontrolleur.php');
		include ('views/formulaireconcertview.php');
		include('views/footer.php');
}
 ?>