<?php

include ('controlleurs/bannierecontrolleur.php');
include ('models/rechercheModel.php');

if(isset($_POST['recherche'])){
	$recherche = $_POST['recherche'];
	var_dump($recherche);
	$concert = 'concert';
	$artiste = 'artiste';
	$salle = 'salle';
	$erreur = 'aucune resultat dans cette catégorie';

	// $verif= verifRecherche($artiste, $recherche);
	// $verif2= verifRecherche($concert, $recherche);
	// $verif3= verifRecherche($salle, $recherche);
	// $verif0 = verifRecherche2($recherche);

	$result= Recherche($artiste, $recherche);
	$result2=Recherche($concert, $recherche);
	$result3=Recherche($salle, $recherche);
	$result0=Recherche2($recherche);

	include ('views/rechercheview.php');
	include ('views/footer.php');
	
}



	?>