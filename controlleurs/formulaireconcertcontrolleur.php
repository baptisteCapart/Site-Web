<?php 


if(!empty($_POST['nom'])){

		$nom = mysql_real_escape_string(htmlspecialchars($_POST['nom']));
		$date = mysql_real_escape_string(htmlspecialchars($_POST['date']));
		$description = mysql_real_escape_string(htmlspecialchars($_POST['description']));
		$début = mysql_real_escape_string(htmlspecialchars($_POST['début']));
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
				$salle_id = $_SESSION['salle_id'];
			}
			else
			{
				$salle_id = $_GET['id'];
				$artiste_id = $_SESSION['artiste_id'];
			}
			var_dump($artiste_id);
			var_dump($salle_id);
			insertConcert($nom, $date ,$description, $début, $durée, $message, $photocover, $topic_id, $salle_id, $artiste_id);
		}
	}
		else
		{
			if(isset($_GET['concert_id'])){
				$id = $_GET['concert_id'];
				updateConcert($nom, $date ,$description, $début, $durée, $message, $photocover, $id);
		}}
		include('controlleurs/bannierecontrolleur.php');
		include ('views/formulaireconcertview.php');
		include('views/footer.php');		

}else{

		include('controlleurs/bannierecontrolleur.php');
		include ('views/formulaireconcertview.php');
		include('views/footer.php');}
 ?>