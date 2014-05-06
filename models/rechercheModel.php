<?php

function Recherche($recherche){

	global $bdd;
	$requete= "SELECT * from concert, artiste, salle WHERE nom, pseudo LIKE '%$recherche%'";
	$resultat=mysql_query($requete);
	while ($rows=mysql_fetch_array($resultat)) {
	$nom=$rows[nom]; $pseudo=$rows[pseudo];
	echo "nom : $nom, pseudo : $pseudo";

}

?>