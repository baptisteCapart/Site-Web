<?php 


if(!empty($_POST['nomartiste']) AND !empty ($_POST['description']) AND !empty ($_POST['style']) AND !empty ($_POST['photogroupe'])){


		$nomartiste = mysql_real_escape_string(htmlspecialchars($_POST['nomartiste']));
		$style = mysql_real_escape_string(htmlspecialchars($_POST['style']));
		$photogroupe = mysql_real_escape_string(htmlspecialchars($_POST['photogroupe']));
		$description = mysql_real_escape_string(htmlspecialchars($_POST['description']));
		$photogroupe ="";
		
		if(!empty($_POST['photogroupe'])){
			$photogroupe = mysql_real_escape_string(htmlspecialchars($_POST['photogroupe']));
		}

		include ('models/artistemodel.php');

		if(isset($_SESSION['id'])){
			insertArtiste($nomartiste, $style ,$description, $photogroupe, $_SESSION['id']);
		}

		include('controlleurs/bannierecontrolleur.php');
		include ('views/formulairegroupe.php');
		include('views/footer.php');
}else{

		include('controlleurs/bannierecontrolleur.php');
		include ('views/formulairegroupe.php');
		include('views/footer.php');}
 ?>