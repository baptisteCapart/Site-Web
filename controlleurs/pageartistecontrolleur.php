<?php 

include ('models/artistemodel.php');
include ('models/extraitModel.php');
include ('models/SuivreModel.php');
include ('models/DonnerAvis.php');
include ('models/concertmodel.php');
include ('models/sallemodel.php');
include ('models/membremodel.php');
include ('models/photomodel.php');
include ('models/globalmodel.php');



if(isset($_GET['erreur'])){
	$erreur = $_GET['erreur'];
}

if(isset($_SESSION['id'])){
	$admin = recupererdonnees("membre","membre_id",$_SESSION['id']);
}

$tableid="artiste_id";
if(isset($_GET['id'])){
	$createur=AuthentificationArtiste($_GET["id"]);
	$artiste_id = $_GET["id"];
	$notif=nouveauMessage("artiste_id","artiste",0,$artiste_id);
	$concert=listeConcertsUser("salle_id", "artiste_id","artiste",0,$artiste_id);
	$concertartiste = ConcertP("artiste_id",$artiste_id);
	$concertartiste2 = ConcertF("artiste_id",$artiste_id);
	if(isset($_POST['supprimer'])){

		dropArtiste($artiste_id);
		header('location: index.php?page=listeartistecontrolleur');
	}

	$listeStyles = listeStyle($artiste_id);

}

if(isset($_GET['donneravisid'])){
$donneravisid = $_GET['donneravisid'];

	if(isset($_POST['supprimerAvis'])){

		dropAvis($donneravisid);
		header('location: index.php?page=pageartistecontrolleur&id='.$_GET['id'].'&onglet=4');
	}	
}


if(isset($_GET['id'])){
	$_SESSION['artisteID'] = $_GET['id'];
}

$donnees = recupererdonnees("artiste","artiste_id",$_SESSION['artisteID']);
if(isset($_GET['id'])){
	if(!empty($_FILES['extrait1'])){
			if(!empty($_FILES['extrait1']) && $_FILES['extrait1']['name']!=''){
				$extrait1 = htmlspecialchars($_FILES['extrait1']['name']);
				
				$nomInit = $_FILES['extrait1']['name'];
				$infosPath = pathinfo($nomInit);
				$extension = $infosPath['extension'];
				$extensionsAutorisees = array("mp3", "wav");
				
				if (!(in_array($extension, $extensionsAutorisees))) {
					$messageA = "ATTENTION : le format de votre photo n'est pas bon, vous avez bien été insrit mais votre photo de salle sera générée par défaut";
					$_SESSION['formatS'] = $messageA;
				} else { 
					$idE1 = insertExtrait($_GET['id'], $extrait1);
					$nomDestination = $idE1.".".$extension;
					updateExtrait($idE1, $nomDestination);   

					$repertoireDestination = dirname(dirname(__FILE__))."/"."controlleurs"."/"."extraits"."/"; 

					move_uploaded_file($_FILES["extrait1"]["tmp_name"], $repertoireDestination.$nomDestination);	
				}				
			}
				
	}
}
$photo="";
if(!empty($_FILES['photoA']) && $_FILES['photoA']['name']!=''){
				$photo = htmlspecialchars($_FILES['photoA']['name']);

		if(isset($_SESSION['id'])){
			

			$current_id = insertPhoto("artiste_id",$artiste_id,$photo);
								

				$nomInit = $_FILES['photoA']['name'];
				$infosPath = pathinfo($nomInit);
				$extension = $infosPath['extension'];
				$extensionsAutorisees = array("jpeg", "jpg", "gif", "png","JPG");
				$nomDestination = $current_id.".".$extension;
				if (!(in_array($extension, $extensionsAutorisees))) {
					echo"non";
				} else { 
					photoUpdateA($artiste_id,$current_id, $nomDestination);   

					$repertoireDestination = dirname(dirname(__FILE__))."/"."controlleurs"."/"."images"."/"."photos"."/"; 
					//   $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

					move_uploaded_file($_FILES["photoA"]["tmp_name"], $repertoireDestination.$nomDestination);	
				}
			}
}






$musiques = listeMusiques();
$photos=Photo("artiste_id");
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
				$contenu = htmlspecialchars($contenu);
				Avis($_SESSION['id'],"artiste_id", $_SESSION['artisteID'], $contenu, $_GET['note']);
			
		}
	}		
}
if(isset($_GET['id'])){
	$listeAvis = listeAvis("artiste_id",$_GET['id']);
	if (isset($_SESSION['id'])){
	$existant = PossedeAvis($_SESSION['id'] ,"artiste_id", $_GET['id']);
}}

if(!empty($_POST['nomartiste']) AND !empty ($_POST['description']) ){


		$nomartiste = htmlspecialchars($_POST['nomartiste']);
		$description = htmlspecialchars($_POST['description']);
		$photogroupe ="";

		if(!empty($_POST['photogroupe'])){
			$photogroupe = htmlspecialchars($_POST['photogroupe']);
		}

		if ($photogroupe == ""){
			$photogroupe = $donnees['photocover'];
		}

		modifierArtiste($_SESSION['artisteID'], $nomartiste, $description, $photogroupe);

		if(!empty($_FILES['photogroupe'])&& $_FILES['photogroupe']['name']!='' ){
			$photogroupe = htmlspecialchars($_FILES['photogroupe']['name']);

			$nomInit = $_FILES['photogroupe']['name'];
			$infosPath = pathinfo($nomInit);
			$extension = $infosPath['extension'];
			$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
			$nomDestination = $donnees['artiste_id'].".".$extension;
			

			if (!(in_array($extension, $extensionsAutorisees))) {
				$message = "ATTENTION : le format de votre photo de profil n'est pas bon, vous avez bien été insrit mais vous n'aurez pas de photo de profil";
				$_SESSION['format'] = $message;
			} else { 
				// $poids = filesize($photodeprofil);
				// if ($poids < 1000) {
					
				
			photoCA($donnees['artiste_id'],$nomDestination);

				$repertoireDestination = dirname(dirname(__FILE__))."/"."controlleurs"."/"."images"."/"."artistes"."/"; 

				move_uploaded_file($_FILES["photogroupe"]["tmp_name"], $repertoireDestination.$nomDestination);
				
				//}

			}
		}
}

if (isset($_POST['suivre'])){
	follow($_SESSION['id'],"artiste_id", $_SESSION['artisteID']);
}
if (isset($_SESSION['id'])){
	$follower=checkSuivi("artiste_id",$_SESSION['id'], $_SESSION['artisteID']);
}

$NbAbonnes = NbAbonnesArtiste($_SESSION['artisteID']);

if(isset($_POST['stop'])){
	Stopsuivi($_SESSION['id'],"artiste_id", $_SESSION['artisteID']);
}


include('controlleurs/bannierecontrolleur.php');
include ('views/pageartiste.php');
include('views/footer.php');


 ?>