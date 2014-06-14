<?php 

include ('models/membremodel.php');
include ('models/artistemodel.php');
include ('models/globalmodel.php');

if (!empty($_POST['message'])) {
	$message = htmlspecialchars($_POST['message']);
	addstyle($message);	
}


$AllStyles = getStyle();


if(isset($_SESSION['id'])){
	$admin = recupererdonnees('membre', 'membre_id', $_SESSION['id']);
}

if(!empty($_POST['nomartiste']) AND !empty ($_POST['description'])  AND !empty($_POST['style'])){

		//$style = mysql_real_escape_string(htmlspecialchars($_POST['style']));	
		$nomartiste = htmlspecialchars($_POST['nomartiste']);
		$description = htmlspecialchars($_POST['description']);
		$photogroupe ="";
		
		if(!empty($_POST['photogroupe'])){
			$photogroupe = htmlspecialchars($_POST['photogroupe']);
		}else{
			$photogroupe="artistedefaut.jpg";
		}

		if(isset($_SESSION['id'])){	
			if(!empty($_POST['style'])){
				$current_id = insertArtiste($nomartiste ,$description, $photogroupe, $_SESSION['id']);
				$nomInit = $_FILES['photogroupe']['name'];
				$infosPath = pathinfo($nomInit);
				$extension = $infosPath['extension'];
				$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
				$nomDestination = $current_id.".".$extension;
				var_dump($infosPath);
				if (!(in_array($extension, $extensionsAutorisees))) {
					$messageA = "ATTENTION : le format de votre photo n'est pas bon, vous avez bien été insrit mais votre photo d'artiste sera générée par défaut";
					$_SESSION['formatA'] = $messageA;
				} else { 
					photoCA($current_id, $nomDestination);   

					$repertoireDestination = dirname(dirname(__FILE__))."/"."controlleurs"."/"."images"."/"."artistes"."/"; 
					//   $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

					move_uploaded_file($_FILES["photogroupe"]["tmp_name"], $repertoireDestination.$nomDestination);	
				}				
				for ($i=0;$i<count($_POST['style']);$i++){
					$choix = $_POST['style'][$i];
					finishartiste($current_id, $choix);
				}
				header ('location: index.php?page=pageartistecontrolleur&id='.$current_id);
			}	
			
		}

		include('controlleurs/bannierecontrolleur.php');
		include ('views/formulairegroupe.php');
		include('views/footer.php');
}else{

		include('controlleurs/bannierecontrolleur.php');
		include ('views/formulairegroupe.php');
		include('views/footer.php');}
 ?>