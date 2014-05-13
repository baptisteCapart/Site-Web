<?php

function verifRecherche($table, $recherche) {
	global $bdd;
	$requete=$bdd->query("SELECT count(nom) FROM $table WHERE nom LIKE '$recherche%'");
	$result = $requete->fetch();
	return $result;
}

function verifRecherche2($recherche) {
	global $bdd;

	$requete=$bdd->query("SELECT count(pseudo) FROM membre WHERE pseudo LIKE '$recherche%'");
	$result = $requete->fetch();
	return $result;
}

function Recherche($table, $recherche) {
	global $bdd;
	Recherche0;
}

function Recherche0($table, $recherche)
{
	global $bdd;
	$requete=$bdd->query("SELECT * FROM $table WHERE nom = ".$recherche);
	return $requete;
}

function Recherche1($table, $recherche) {
	global $bdd;
	$requete=$bdd->query("SELECT * FROM $table WHERE nom LIKE '$recherche%'");
	return $requete;
}

function Recherche2($table, $recherche) {
	global $bdd;
	$requete=$bdd->query("SELECT * FROM $table WHERE nom LIKE '$recherche%'");
	return $requete;
}

function Recherchem($recherche) {
	global $bdd;
	$requete=$bdd->query("SELECT * FROM membre WHERE pseudo LIKE '$recherche%'") or die (print_r($bdd->errorInfo()));
	return $requete;
}



?>