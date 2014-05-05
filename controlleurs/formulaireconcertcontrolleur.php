<?php 


if(!empty($_POST['nom'])){
		$photocover = "";
		$nom = mysql_real_escape_string(htmlspecialchars($_POST['nom']));
		$jour = $_POST['jour'];
		$description = mysql_real_escape_string(htmlspecialchars($_POST['description']));
		$début = $_POST['début'];
		$duree = $_POST['duree'];
		$message = mysql_real_escape_string(htmlspecialchars($_POST['message']));
		
		if(!empty($_POST['photocover'])){
			$photocover = mysql_real_escape_string(htmlspecialchars($_POST['photocover']));
		}

		include ('models/concertmodel.php');

if(isset($_GET['new'])){

echo "tyty";
		if($_GET['new']=='new'){
			if($_GET['invite'] == 'artiste')
			{
				$artiste_id = $_GET['id'];
				$salle_id = $_SESSION['salle_id']['salle_id'];
			}
			else
			{
				$salle_id = $_GET['id'];
				$artiste_id = $_SESSION['artiste_id']['artiste_id'];
			}
			insertConcert($nom, $jour ,$description, $début, $duree, $message, $photocover, $salle_id, $artiste_id);
		}
	}
		else
		{
			if(isset($_GET['concert_id'])){
				$id = $_GET['concert_id'];
				updateConcert($nom, $jour ,$description, $début, $duree, $message, $photocover, $id);
		}}
		include('controlleurs/bannierecontrolleur.php');
		include ('views/formulaireconcertview.php');
		include('views/footer.php');		

}else{

		include('controlleurs/bannierecontrolleur.php');
		include ('views/formulaireconcertview.php');
		include('views/footer.php');}
 ?>