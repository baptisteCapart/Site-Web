<?php 


if(!empty($_POST['Nom_de_salle']) AND !empty ($_POST['code_postal']) AND !empty ($_POST['telephone']) AND !empty ($_POST['ville']) AND !empty ($_POST['adresse'])
 AND !empty ($_POST['type']) AND !empty ($_POST['capacité'])){


		$Nom_de_salle = htmlspecialchars($_POST['Nom_de_salle']);
		$code_postal = htmlspecialchars($_POST['code_postal']);
		$telephone = htmlspecialchars($_POST['telephone']);
		$ville = htmlspecialchars($_POST['ville']);
		$adresse = htmlspecialchars($_POST['adresse']);
		$type = htmlspecialchars($_POST['type']);		
		$capacité = htmlspecialchars($_POST['capacité']);		

		$photosalle ="";
		
		if(!empty($_POST['photosalle'])){
			$photosalle = htmlspecialchars($_POST['photosalle']);
		}else{
			$photosalle="salledefaut.jpg";
		}

		include ('models/sallemodel.php');
		
		if(isset($_SESSION['id'])){
			$current_id = insertSalle($Nom_de_salle, $code_postal, $telephone,$ville, $adresse, $type,$capacité,$photosalle, $_SESSION['id']);

				$nomInit = $_FILES['photosalle']['name'];
				$infosPath = pathinfo($nomInit);
				$extension = $infosPath['extension'];
				$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
				$nomDestination = $current_id.".".$extension;
				var_dump($infosPath);
				if (!(in_array($extension, $extensionsAutorisees))) {
					$messageA = "ATTENTION : le format de votre photo n'est pas bon, vous avez bien été insrit mais votre photo de salle sera générée par défaut";
					$_SESSION['formatS'] = $messageS;
				} else { 
					photoCS($current_id, $nomDestination);   

					$repertoireDestination = dirname(dirname(__FILE__))."/"."controlleurs"."/"."images"."/"."salles"."/"; 
					//   $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

					move_uploaded_file($_FILES["photosalle"]["tmp_name"], $repertoireDestination.$nomDestination);	
				}		
			header ('location: index.php?page=pageSallecontrolleur&id='.$current_id);	
		}

		
		include('controlleurs/bannierecontrolleur.php');
		include ('views/formulairesalle.php');
		include('views/footer.php');

}else{
		include('controlleurs/bannierecontrolleur.php');
		include ('views/formulairesalle.php');
		include('views/footer.php');
}
 ?>