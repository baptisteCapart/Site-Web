<?php

function verifRecherche($recherche) {
	global $bdd;

	$requete= "SELECT nom, pseudo from concert, artiste, salle";
	if ($requete != %$recherche%) {
		return false;
	}else{
		return true;
	}

}

function Recherche($recherche){
	global $bdd;

	$requete= "SELECT * from concert, artiste, salle WHERE nom, pseudo LIKE '%$recherche%'";
	$resultat=mysql_query($requete);

	while ($rows=mysql_fetch_array($resultat)) {
	$nom=$rows[nom]; $pseudo=$rows[pseudo];
	

}

?>