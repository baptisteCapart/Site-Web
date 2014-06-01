<?php 


if(!empty($_POST['nomartiste']) AND !empty ($_POST['description'])  AND !empty($_POST['style'])){

		$style = mysql_real_escape_string(htmlspecialchars($_POST['style']));	
		$nomartiste = mysql_real_escape_string(htmlspecialchars($_POST['nomartiste']));
		$photogroupe = mysql_real_escape_string(htmlspecialchars($_POST['photogroupe']));
		$description = mysql_real_escape_string(htmlspecialchars($_POST['description']));
		$photogroupe ="";
		
		if(!empty($_POST['photogroupe'])){
			$photogroupe = mysql_real_escape_string(htmlspecialchars($_POST['photogroupe']));
		}else{
			$photogroupe="artistedefaut.jpg";
		}

		include ('models/artistemodel.php');
		if(isset($_SESSION['id'])){
			$current_id = insertArtiste($nomartiste, $style ,$description, $photogroupe, $_SESSION['id']);
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
				photoA($current_id, $nomDestination);   

				$repertoireDestination = dirname(dirname(__FILE__))."/"."controlleurs"."/"."images"."/"."artistes"."/"; 
				//   $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

				move_uploaded_file($_FILES["photogroupe"]["tmp_name"], $repertoireDestination.$nomDestination);


			}		
		if(!empty($_POST['style'])){
				
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