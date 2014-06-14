<?php
include ('models/rechercheModel.php');


if(isset($_POST['recherche'])){
	$recherche = htmlspecialchars($_POST['recherche']);
	$concert = 'concert';
	$artiste = 'artiste';
	$salle = 'salle';
	$erreur = 'Aucun resultat pour votre recherche dans cette catégorie';


	$resulta= Recherche($artiste, $recherche);
	$resultc= Recherche($concert, $recherche);
	$results= Recherche($salle, $recherche);
	$resultm= Recherchem($recherche);

	
}


include ('controlleurs/bannierecontrolleur.php');
include ('views/rechercheview.php');
include ('views/footer.php');


	?>

