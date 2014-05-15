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
	$levenshtein = array();
	$requete = $bdd->query("SELECT * FROM ".$table);
	foreach ($requete as $entree) {
		if(count($levenshtein)>=10){
			break;
		}
		$vladimir = levenshtein($recherche, $entree['nom']);
		(string)$vladimir = $entree;
		$levenshtein[] = (string)$vladimir;
		var_dump($levenshtein);
	}
	asort($levenshtein);
	return $levenshtein;
}

function Recherchem($recherche) {
	global $bdd;
	$requete=$bdd->query("SELECT * FROM membre WHERE pseudo LIKE '$recherche%'") or die (print_r($bdd->errorInfo()));
	return $requete;
}

?>