<?php

include ('models/membremodel.php');
include ('models/SuivreModel.php');
include ('models/concertmodel.php');
include ('models/globalmodel.php');


$donnees = recupererdonnees("membre","membre_id",$_GET['id']);
$arr = explode('-', $donnees['date_de_naissance']);
$birthdate = $arr[2].'-'.$arr[1].'-'.$arr[0];
$ongletMembre =1;


if(isset($_SESSION['id'])){
	$admin = recupererdonnees("membre","membre_id",$_SESSION['id']);
}



if(isset($_POST['supprimer3'])){
	dropMembre($donnees['membre_id']);
	header('location: index.php?page=homecontrolleur');
}


if (isset($_POST['suivre'])){
	follow($_SESSION['id'],"ami_id", $_GET['id']);
}
if (isset($_SESSION['id'])){
	$follower=checkSuivi("ami_id",$_SESSION['id'], $_GET['id']);
}
if(isset($_POST['stop'])){
	Stopsuivi($_SESSION['id'],"ami_id",$_GET['id']);
}


if(isset($_GET['ongletMembre'])){

	if ($_GET["ongletMembre"] ==1){
		$ongletMembre=1;
	}	
	if ($_GET["ongletMembre"] ==2){
		$ongletMembre=2;
	}

	if ($_GET["ongletMembre"] ==3){
		$ongletMembre=3;
	}

	if ($_GET["ongletMembre"] ==4){
		$ongletMembre=4;
	}
	if ($_GET["ongletMembre"] ==5){
		$ongletMembre=5;
	}	

}	

if(isset($_SESSION['id'])){
	$membre = $_SESSION['id'];
	$listepost=listePostM($membre);
}

if(isset($_POST['contenu'])){
	$contenu = $_POST['contenu'];
	if(isset($_GET['id'])){
		newpostM($contenu,$membre,$_GET['id'] );
	}
	
}


if( !empty ($_POST['mail']) AND !empty ($_POST['ville']) AND !empty ($_POST['codepostal']) AND !empty ($_POST['pays']) AND !empty ($_POST['sexe']) )
{
	
		$mail = mysql_real_escape_string(htmlspecialchars($_POST['mail']));
		$sexe = mysql_real_escape_string(htmlspecialchars($_POST['sexe']));
		$codepostal = mysql_real_escape_string(htmlspecialchars($_POST['codepostal']));
		$pays = mysql_real_escape_string(htmlspecialchars($_POST['pays']));
		$ville = mysql_real_escape_string(htmlspecialchars($_POST['ville']));
		$age = mysql_real_escape_string(htmlspecialchars($_POST['age']));

		$photodeprofil = "";
		$photodecover = "";


		if(!empty($_POST['photodeprofil'])){
			$photodeprofil = mysql_real_escape_string(htmlspecialchars($_POST['photodeprofil']));
		}
		if(!empty($_POST['photodecover'])){
			$photodecover = mysql_real_escape_string(htmlspecialchars($_POST['photodecover']));
		} 	

		if ($photodeprofil == ""){
			$photodeprofil = $donnees['photoprofil'];
		}
		if ($photodecover == ""){
			$photodecover = $donnees['photocover'];
		}
		modifier($_SESSION['id'], $mail , $age, $codepostal, $ville ,$sexe, $pays,$photodeprofil, $photodecover);
		

		if(!empty($_FILES['photodeprofil']) ){
			$photodeprofil = mysql_real_escape_string(htmlspecialchars($_FILES['photodeprofil']['name']));

			$nomInitProf = $_FILES['photodeprofil']['name'];
			$infosPathProf = pathinfo($nomInitProf);
			$extensionProf = $infosPathProf['extension'];
			$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
			$nomDestinationProf = $donnees['membre_id']."."."P".".".$extensionProf;
			

			if (!(in_array($extensionProf, $extensionsAutorisees))) {
				$message = "ATTENTION : le format de votre photo de profil n'est pas bon, vous avez bien été insrit mais vous n'aurez pas de photo de profil";
				$_SESSION['format'] = $message;
			} else { 
				// $poids = filesize($photodeprofil);
				// if ($poids < 1000) {
					
				
			photoProf($_SESSION['id'],$nomDestinationProf);

				$repertoireDestination = dirname(dirname(__FILE__))."/"."controlleurs"."/"."images"."/"."membres"."/"; 

				move_uploaded_file($_FILES["photodeprofil"]["tmp_name"], $repertoireDestination.$nomDestinationProf);
				
				//}

			}
		}


		if(!empty($_FILES['photodecover']) ){
			$photodecover = mysql_real_escape_string(htmlspecialchars($_FILES['photodecover']['name']));

			$nomInitCov = $_FILES['photodecover']['name'];
			$infosPathCov = pathinfo($nomInitCov);
			$extensionCov = $infosPathCov['extension'];
			$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
			$nomDestinationCov = $donnees['membre_id']."."."C".".".$extensionCov;
			

			if (!(in_array($extensionCov, $extensionsAutorisees))) {
				$message = "ATTENTION : le format de votre photo de profil n'est pas bon, vous avez bien été insrit mais vous n'aurez pas de photo de profil";
				$_SESSION['format'] = $message;
			} else { 
				// $poids = filesize($photodeprofil);
				// if ($poids < 1000) {
					
				
			photoCov($_SESSION['id'],$nomDestinationCov);

				$repertoireDestination = dirname(dirname(__FILE__))."/"."controlleurs"."/"."images"."/"."membres"."/"; 

				move_uploaded_file($_FILES["photodecover"]["tmp_name"], $repertoireDestination.$nomDestinationCov);
				
				//}

			}
		}
}


$liste=ProfilsSuivis("artiste","artiste_id",$_GET['id']);
$liste2 = ProfilsSuivis("salle","salle_id",$_GET['id']);
$liste3 = ConcertsParticipes($_GET['id']);
$liste4 = MembresSuivis($_GET['id']);


include('controlleurs/bannierecontrolleur.php');
include ('views/PageMembre.php');
include('views/footer.php');

 ?>