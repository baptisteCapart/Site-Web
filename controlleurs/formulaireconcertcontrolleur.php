<?php 
include ('models/concertmodel.php');

if(isset($_GET['invite'])){

	$invite=$_GET['invite'];
}		

if(!empty($_POST['nom']) and !empty($_POST['jour']) and !empty($_POST['début'])){
		$photocover = "";
		$nom = htmlspecialchars($_POST['nom']);
		$jour = $_POST['jour'];
		$description = htmlspecialchars($_POST['description']);
		$début = $_POST['début'];
		$duree = $_POST['duree'];
		if(isset($_POST['message'])){
			$message = $_POST['message'];
			$message = nl2br($message);
			$message = htmlspecialchars($message);	
		}
		if(!empty($_POST['photocover'])){
			$photocover = htmlspecialchars($_POST['photocover']);
		}else{
			$photocover="concertdefaut.jpg";
		}

		

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
			$current_id=insertConcert($nom, $jour ,$description, $début, $duree, $message, $photocover, $salle_id, $artiste_id, $inviteur,$non_repondu);
	if(!empty($_FILES['photocover']) && $_FILES['photocover']['name']!=''){
			$photocover = htmlspecialchars($_FILES['photocover']['name']);
				$nomInit = $_FILES['photocover']['name'];
				$infosPath = pathinfo($nomInit);
				$extension = $infosPath['extension'];
				$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
				$nomDestination = $current_id.".".$extension;
				if (!(in_array($extension, $extensionsAutorisees))) {
					$messageA = "ATTENTION : le format de votre photo n'est pas bon, vous avez bien été insrit mais votre photo d'artiste sera générée par défaut";
					$_SESSION['formatA'] = $messageA;
				} else { 
					photoC($current_id, $nomDestination);   

					$repertoireDestination = dirname(dirname(__FILE__))."/"."controlleurs"."/"."images"."/"."concerts"."/"; 
					//   $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

					move_uploaded_file($_FILES["photocover"]["tmp_name"], $repertoireDestination.$nomDestination);	
				}				
		
	}
}
		// }else{

		// 	if(isset($_GET['concert_id'])){
		// 		$id = $_GET['concert_id'];
		// 		updateConcert($nom, $jour ,$description, $début, $duree, $message, $photocover, $id);
		// 	}
		// }
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