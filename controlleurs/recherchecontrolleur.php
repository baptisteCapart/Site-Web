<?php


	include ('models/rechercheModel.php');

if(isset($_POST) && !empty($_POST['recherche'])){
	extract($_POST);
	$verif= verifRecherche($recherche)

	if ($verif = true) {
		
		$requete = Recherche($recherche);
		echo "nom : $nom, pseudo : $pseudo";

	} else {

		echo '<p> Aucun résultat ne correspond à cette recherche. Essayez autre chose. </p>';
  	  	exit;

	}
	
}

	include ('controlleurs/bannierecontrolleur.php');
	include ('views/rechercheview.php');
	include ('views/footer.php');


	?>