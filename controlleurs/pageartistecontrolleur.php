<?php 

include ('models/artistemodel.php');
include ('models/extraitModel.php');
include ('models/SuivreModel.php');
include ('models/DonnerAvis.php');
include ('models/concertmodel.php');
include ('models/sallemodel.php');
include ('models/membremodel.php');
include ('models/photomodel.php');


if(isset($_GET['erreur'])){
	$erreur = $_GET['erreur'];
}

if(isset($_SESSION['id'])){
	$admin = recuperer($_SESSION['id']);
}

$tableid="artiste_id";
if(isset($_GET['id'])){
	$createur=AuthentificationArtiste($_GET["id"]);
	$artiste_id = $_GET["id"];
	$notif=nouveauMessageA($artiste_id);
	$concert=listeConcertsA($artiste_id);
	$concertartiste = ConcertArtisteP($artiste_id);
	$concertartiste2 = ConcertArtisteF($artiste_id);
	if(isset($_POST['supprimer'])){

		dropArtiste($artiste_id);
		header('location: index.php?page=listeartistecontrolleur');
	}

}



if(isset($_GET['id'])){
	$_SESSION['artisteID'] = $_GET['id'];
}

$donnees = recuperer2($_SESSION['artisteID']);

if(!empty($_POST['extrait1']) or !empty($_POST['extrait2']) ){
		if(isset($_GET['id'])){	
			if(!empty($_POST['extrait1'])){
				$extrait1 = mysql_real_escape_string(htmlspecialchars($_POST['extrait1']));
				insertExtrait($_GET['id'], $extrait1);
			}
			if(!empty($_POST['extrait2'])){
				$extrait2 = mysql_real_escape_string(htmlspecialchars($_POST['extrait2']));
				insertExtrait($_GET['id'], $extrait2);
			}		

			
			
		}
}
$photo="";
if(!empty($_POST['photoA']) ){
				$photo = mysql_real_escape_string(htmlspecialchars($_POST['photoA']));

}
		
		if(isset($_SESSION['id'])){
			

			$current_id = insertPhotoA($artiste_id,$photo);
								

				$nomInit = $_FILES['photoA']['name'];
				$infosPath = pathinfo($nomInit);
				$extension = $infosPath['extension'];
				$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
				$nomDestination = $current_id.".".$extension;
				if (!(in_array($extension, $extensionsAutorisees))) {
					$messageA = "ATTENTION : le format de votre photo n'est pas bon, vous avez bien été insrit mais votre photo de salle sera générée par défaut";
					$_SESSION['formatS'] = $messageS;
				} else { 
					photoUpdate($current_id, $nomDestination);   

					$repertoireDestination = dirname(dirname(__FILE__))."/"."controlleurs"."/"."images"."/"."photos"."/"; 
					//   $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

					move_uploaded_file($_FILES["photoA"]["tmp_name"], $repertoireDestination.$nomDestination);	
				}		
			
		

}






$musiques = listeMusiques();
$photos=PhotoA();
$onglet =1;

if(isset($_GET['onglet'])){

	if ($_GET["onglet"] ==1){
		$onglet=1;
	}	
	if ($_GET["onglet"] ==2){
		$onglet=2;
	}

	if ($_GET["onglet"] ==3){
		$onglet=3;
	}

	if ($_GET["onglet"] ==4){
		$onglet=4;
	}

	if ($_GET["onglet"] ==5){
		$onglet=5;
	}
	if ($_GET["onglet"] ==6){
		$onglet=6;
	}	
}

if(isset($_GET['id'])){
	if(isset($_GET['note'])){
		if(isset($_POST['contenu'])){
				$contenu = $_POST['contenu'];
				$contenu = nl2br($contenu);
				$contenu = mysql_real_escape_string($contenu);
				AvisArtiste($_SESSION['id'], $_SESSION['artisteID'], $contenu, $_GET['note']);
			
		}
	}		
}
if(isset($_GET['id'])){
	$listeAvis = listeAvisArtiste($_GET['id']);
}

if(!empty($_POST['nomartiste']) AND !empty ($_POST['description']) ){


		$nomartiste = mysql_real_escape_string(htmlspecialchars($_POST['nomartiste']));
		$description = mysql_real_escape_string(htmlspecialchars($_POST['description']));
		$photogroupe ="";

		if(!empty($_POST['photogroupe'])){
			$photogroupe = mysql_real_escape_string(htmlspecialchars($_POST['photogroupe']));
		}

		if ($photogroupe == ""){
			$photogroupe = $donnees['photocover'];
		}

		modifierArtiste($_SESSION['artisteID'], $nomartiste, $description, $photogroupe);
}

if (isset($_POST['suivre'])){
	followArtiste($_SESSION['id'], $_SESSION['artisteID']);
}
if (isset($_SESSION['id'])){
	$follower=checkArtiste($_SESSION['id'], $_SESSION['artisteID']);
}

$NbAbonnes = NbAbonnesArtiste($_SESSION['artisteID']);

if(isset($_POST['stop'])){
	StopsuiviA($_SESSION['id'], $_SESSION['artisteID']);
}


include('controlleurs/bannierecontrolleur.php');
include ('views/pageartiste.php');
include('views/footer.php');


 ?>