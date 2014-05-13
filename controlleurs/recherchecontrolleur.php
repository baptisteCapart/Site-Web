<?php
include ('models/rechercheModel.php');


if(isset($_POST['recherche'])){
	$recherche = $_POST['recherche'];
	$concert = 'concert';
	$artiste = 'artiste';
	$salle = 'salle';
	$erreur = 'Aucun resultat pour votre recherche dans cette catégorie';

	$verifa = verifRecherche($artiste, $recherche);
	$verifc = verifRecherche($concert, $recherche);
	$verifs = verifRecherche($salle, $recherche);
	$verifm = verifRecherche2($recherche);

	$resulta= Recherche($artiste, $recherche);
	$resultc=Recherche($concert, $recherche);
	$results=Recherche($salle, $recherche);
	$resultm=Recherchem($recherche);

	
}


include ('controlleurs/bannierecontrolleur.php');
include ('views/rechercheview.php');
include ('views/footer.php');


	?>

