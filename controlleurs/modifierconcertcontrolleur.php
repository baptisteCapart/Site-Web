<?php 
include('models/concertmodel.php');

if(isset($_GET['id'])){

	$concert_id=$_GET['id'];
	$donnees = recuperer5($concert_id);
	$listepost = listePost($donnees['topic_id']);
}

if($donnees['inviteur']==1){
	$inviteur=0;
}else{
	$inviteur=1;
}	

if($donnees['non_repondu']=='artiste'){
	$non_repondu='salle';
}else{
	$non_repondu='artiste';
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
			$photocover="";
	
		}
		if(!empty($_POST['photocover'])){
			$photocover = mysql_real_escape_string(htmlspecialchars($_POST['photocover']));
		}
		if($photocover==""){
			$photocover=$donnees['photocover'];
		}
		if($donnees['nom']==$nom and $donnees['jour']==$jour and $donnees['heure']==$début and $donnees['duree']==$duree 
			and $donnees['description']==$description and $photocover==$donnees['photocover'] ){
			$accord = 1;
			accord($concert_id, $accord);
		}

	updateConcert($nom, $jour ,$description, $début, $duree, $message, $photocover, $concert_id, $inviteur,$non_repondu);
		if(!empty($_FILES['photocover']) ){
			$photocover = mysql_real_escape_string(htmlspecialchars($_FILES['photocover']['name']));

			$nomInit = $_FILES['photocover']['name'];
			$infosPath = pathinfo($nomInit);
			$extension = $infosPath['extension'];
			$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
			$nomDestination = $donnees['concert_id'].".".$extension;
			

			if (!(in_array($extension, $extensionsAutorisees))) {
				$message = "ATTENTION : le format de votre photo de profil n'est pas bon, vous avez bien été insrit mais vous n'aurez pas de photo de profil";
				$_SESSION['format'] = $message;
			} else { 
				// $poids = filesize($photodeprofil);
				// if ($poids < 1000) {
					
				
			photoC($donnees['concert_id'],$nomDestination);

				$repertoireDestination = dirname(dirname(__FILE__))."/"."controlleurs"."/"."images"."/"."concerts"."/"; 

				move_uploaded_file($_FILES["photocover"]["tmp_name"], $repertoireDestination.$nomDestination);
				
				//}

			}
		}


		include('controlleurs/bannierecontrolleur.php');
		include ('views/modifierconcertView.php');
		include('views/footer.php');
	}else{

		include('controlleurs/bannierecontrolleur.php');
		include ('views/modifierconcertView.php');
		include('views/footer.php');
}
 ?>