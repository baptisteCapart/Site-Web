<?php 

include ('models/sallemodel.php');
include ('models/SuivreModel.php');
include ('models/DonnerAvis.php');
include ('models/concertmodel.php');
include ('models/artistemodel.php');
include ('models/membremodel.php');
include ('models/photomodel.php');
include ('models/globalmodel.php');



if(isset($_SESSION['id'])){
	$admin = recupererdonnees("membre","membre_id",$_SESSION['id']);
}


if(isset($_GET['id'])){
	$createur=AuthentificationSalle($_GET["id"]);
	$salle_id=$_GET["id"];
	$notif = nouveauMessage("salle_id","salle",1,$salle_id);
	$concert=listeConcertsUser("artiste_id","salle_id","salle",1,$salle_id);
	$donnees = recupererdonnees("salle","salle_id",$salle_id);
	$concertsalle = ConcertP("salle_id",$salle_id);
	$concertsalle2 = ConcertF("salle_id",$salle_id);

	if(isset($_POST['supprimer2'])){

		dropSalle($salle_id);
		header('location: index.php?page=listeSallescontrolleur');
	}


}

if(isset($_GET['id'])){
	$_SESSION['salleID'] = $_GET['id'];
}


$ongletSalle =1;

if(isset($_GET['ongletSalle'])){

	if ($_GET["ongletSalle"] ==1){
		$ongletSalle=1;
	}	
	if ($_GET["ongletSalle"] ==2){
		$ongletSalle=2;
	}

	if ($_GET["ongletSalle"] ==3){
		$ongletSalle=3;
	}

	if ($_GET["ongletSalle"] ==4){
		$ongletSalle=4;
	}

	if ($_GET["ongletSalle"] ==5){
		$ongletSalle=5;
	}
	if ($_GET["ongletSalle"] ==6){
		$ongletSalle=6;
	}
}


if(isset($_GET['id'])){
	if(isset($_GET['note'])){
		if(isset($_POST['contenu'])){
				$contenu = $_POST['contenu'];
				$contenu = nl2br($contenu);
				$contenu = htmlspecialchars($contenu);
				Avis($_SESSION['id'],"salle_id", $_SESSION['salleID'], $contenu, $_GET['note']);
			
		}
	}		
}

if(isset($_GET['donneravisid'])){
$donneravisid = $_GET['donneravisid'];

	if(isset($_POST['supprimerAvis'])){

		dropAvis($donneravisid);
		header('location: index.php?page=pageSallecontrolleur&id='.$_GET['id'].'&ongletSalle=3');
	}	
}

if(isset($_GET['id'])){
	$listeAvis = listeAvis("salle_id",$_GET['id']);
	if (isset($_SESSION['id'])){
	$existant = PossedeAvis($_SESSION['id'] ,"salle_id", $_GET['id']);	
}}

if (isset($_POST['suivre'])){
	follow($_SESSION['id'],"salle_id", $_SESSION['salleID']);
}
if (isset($_SESSION['id'])){
	$follower=checkSuivi("salle_id",$_SESSION['id'], $_SESSION['salleID']);
}

$NbAbonnes = NbAbonnesSalle($_SESSION['salleID']);

if (isset($_POST['stop'])){
	Stopsuivi($_SESSION['id'],"salle_id", $_SESSION['salleID']);
}

if(!empty($_POST['Nom_de_salle']) AND !empty ($_POST['code_postal']) AND !empty ($_POST['ville'])  AND !empty ($_POST['adresse']) AND !empty ($_POST['telephone'])
 AND !empty ($_POST['type']) AND !empty ($_POST['capacité'])  ){


		$Nom_de_salle = htmlspecialchars($_POST['Nom_de_salle']);
		$code_postal = htmlspecialchars($_POST['code_postal']);
		$ville = htmlspecialchars($_POST['ville']);
		$adresse = htmlspecialchars($_POST['adresse']);
		$telephone = htmlspecialchars($_POST['telephone']);
		$type = htmlspecialchars($_POST['type']);
		$capacité = htmlspecialchars($_POST['capacité']);		
		$photosalle ="";

		if(!empty($_POST['photosalle'])){
			$photosalle = htmlspecialchars($_POST['photosalle']);
		}

		if ($photosalle == ""){
			$photosalle = $donnees['photocover'];
		}
		modifierSalle($_SESSION['salleID'], $Nom_de_salle, $code_postal ,$ville, $adresse, $telephone, $type,$capacité,$photosalle);

		if(!empty($_FILES['photosalle']) && $_FILES['photosalle']['name']!=''){
			$photosalle = htmlspecialchars($_FILES['photosalle']['name']);

			$nomInit = $_FILES['photosalle']['name'];
			$infosPath = pathinfo($nomInit);
			$extension = $infosPath['extension'];
			$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
			$nomDestination = $donnees['salle_id'].".".$extension;
			

			if (!(in_array($extension, $extensionsAutorisees))) {
				$message = "ATTENTION : le format de votre photo de profil n'est pas bon, vous avez bien été insrit mais vous n'aurez pas de photo de profil";
				$_SESSION['format'] = $message;
			} else { 
				// $poids = filesize($photodeprofil);
				// if ($poids < 1000) {
					
				
			photoCS($donnees['salle_id'],$nomDestination);

				$repertoireDestination = dirname(dirname(__FILE__))."/"."controlleurs"."/"."images"."/"."salles"."/"; 

				move_uploaded_file($_FILES["photosalle"]["tmp_name"], $repertoireDestination.$nomDestination);
				
				//}

			}
		}
}

	$photo="";
	if(!empty($_FILES['photoS']) && $_FILES['photoS']['name']!=''){
			$photo = htmlspecialchars($_FILES['photoS']['name']);

		if(isset($_SESSION['id'])){
			

			$current_id = insertPhoto("salle_id",$salle_id,$photo);
								

				$nomInit = $_FILES['photoS']['name'];
				$infosPath = pathinfo($nomInit);
				$extension = $infosPath['extension'];
				$extensionsAutorisees = array("jpeg", "jpg", "gif", "png","JPG");
				$nomDestination = $current_id.".".$extension;
				if (!(in_array($extension, $extensionsAutorisees))) {
					// $messageS = "ATTENTION : le format de votre photo n'est pas bon, votre photo de salle sera générée par défaut";
					// $_SESSION['formatS'] = $messageS;
				} else { 
					photoUpdateS($salle_id,$current_id, $nomDestination);   

					$repertoireDestination = dirname(dirname(__FILE__))."/"."controlleurs"."/"."images"."/"."photos"."/"; 
					//   $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

					move_uploaded_file($_FILES["photoS"]["tmp_name"], $repertoireDestination.$nomDestination);	
				}		
		}
}

$photos=Photo("salle_id");


include('controlleurs/bannierecontrolleur.php');
include ('views/pageSalle.php');
include('views/footer.php');

 ?>