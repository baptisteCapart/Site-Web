<?php

function verifRecherche($table, $recherche) {
	global $bdd;

	$requete=$bdd->query("SELECT * from $table where nom LIKE '%$recherche");
	$result = $requete->fetch();
	if (!$requete) {
		return false;
	}else{
		return true;
	}
}

function verifRecherche2($recherche) {
	global $bdd;

	$requete=$bdd->query("SELECT *from membre where pseudo LIKE '%$recherche%");
	$result = $requete->fetch();
	if (!$requete) {
		return false;
	}else{
		return true;
	}
}



function Recherche($table, $recherche) {
	global $bdd;
	$requete=$bdd->query("SELECT * from $table where nom LIKE '%$recherche%");
	return $requete;
}

function Recherche2($recherche) {
	global $bdd;
	$requete=$bdd->query("SELECT * from membre where pseudo LIKE '%$recherche%");
	return $requete;
}

?>