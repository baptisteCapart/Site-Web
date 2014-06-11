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

function Recherche_exacte($table, $recherche)
{
	global $bdd;
	if ($table == "membre"){
		$req = $bdd->query("SELECT pseudo FROM $table WHERE pseudo LIKE '$recherche%'");
	} else {
		$req = $bdd->query("SELECT nom FROM $table WHERE nom LIKE '$recherche%'");
	}
	$res = array();
	if ($table == "membre"){
		foreach ($req as $cle => $valeur) {
			$res[$valeur['pseudo']] = 0;
		}
	} else {
		foreach ($req as $cle => $valeur) {
			$res[$valeur['nom']] = 0;
		}
	}
	return $res;
}

function Recherche($table, $recherche) {
	global $bdd;
	
	// On recherche d'abord des résultats contenant le mot-clé exact de la recherche et on les stocke dans le tableau "exact" :
	$exact = Recherche_exacte($table, $recherche);
	
	// Création du tableau levenshtein (regroupe les noms et leur distance Levenshtein au mot-clé) :
	$levenshtein = array();
	
	// On prend tous les noms de la table et on calcule leur distance Levenshtein par rapport au mot-clé, et on les range dans le tableau :
	$requete = $bdd->query("SELECT nom FROM $table");
	foreach ($requete as $nom) {
		$vladimir = levenshtein($recherche, $nom['nom']);
		if ($vladimir <= 4){
			$levenshtein[$nom['nom']] = $vladimir;
		}
	}
	
	// On trie le tableau par distance Levenshtein croissante (pertinence) :
	asort($levenshtein);
	
	// On fusionne ensuite dans le tableau exact et levenshtein dans le cas où exact contient des éléments (s'il est différent de false) :
	if (!$exact)
	{
		$resultat = $levenshtein;
	}
	else
	{
		$resultat = array_merge($exact, $levenshtein);
	}
	
	// On ne garde que les 10 premiers éléments de resultat :
	$result = array_slice($resultat, 0, 10);
	
	// Dans result (trié par pertinence), on prend chaque (nom) et on cherche dans la table de la bdd l'entrée qui lui correspond (chaque pseudo est unique)
	// Ensuite on remplace les valeurs par les tableaux qui regroupent ces informations :
	foreach ($result as $nom => $vladimir) {
		$req = $bdd->query("SELECT * FROM $table WHERE nom = '$nom'") or die (print_r($bdd->errorInfo()));
		$entree = $req->fetch();
		$result[$nom] = $entree;
	}
	// Dans le cas ou la recherche ne renvoie aucun résultat, on renvoie false pour déclencher le message d'erreur :
	if (empty ($result)){
		return false;
	}

	// On retourne le résultat (un tableau à 2 dimansions qui regroupe les infos) :
	return $result;
}

function Recherchem($recherche) {
	global $bdd;
	$table = 'membre';

	// On recherche d'abord des résultats contenant le mot-clé exact de la recherche et on les stocke dans le tableau "exact" :
	$exact = Recherche_exacte($table, $recherche);
	
	// Création du tableau levenshtein (regroupe les pseudos et leur distance Levenshtein au mot-clé) :
	$levenshtein = array();
	
	// On prend tous les pseudos de la table et on calcule leur distance Levenshtein par rapport au mot-clé, et on les range dans le tableau :
	$requete = $bdd->query("SELECT pseudo FROM $table");
	foreach ($requete as $pseudo) {
		$vladimir = levenshtein($recherche, $pseudo['pseudo']);
		if ($vladimir <= 3){
			$levenshtein[$pseudo['pseudo']] = $vladimir;
		}
	}
	
	// On trie le tableau par distance Levenshtein croissante (pertinence) :
	asort($levenshtein);
	
	// On fusionne ensuite dans le tableau exact et levenshtein dans le cas où exact contient des éléments (s'il est différent de false) :
	if (!$exact)
	{
		$resultat = $levenshtein;
	}
	else
	{
		$resultat = array_merge($exact, $levenshtein);
	}
	
	// On ne garde que les 10 premiers éléments de resultat :
	$result = array_slice($resultat, 0, 10);
	
	// Dans result (trié par pertinence), on prend chaque (pseudo) et on cherche dans la table de la bdd l'entrée qui lui correspond (chaque pseudo est unique)
	// Ensuite on remplace les valeurs par les tableaux qui regroupent ces informations :
	foreach ($result as $pseudo => $vladimir) {
		$req = $bdd->query("SELECT * FROM $table WHERE pseudo = '$pseudo'") or die (print_r($bdd->errorInfo()));
		$entree = $req->fetch();
		$result[$pseudo] = $entree;
	}
	// Dans le cas ou la recherche ne renvoie aucun résultat, on renvoie false pour déclencher le message d'erreur :
	if (empty ($result)){
		return false;
	}

	// On retourne le résultat (un tableau à 2 dimansions qui regroupe les infos) :
	return $result;
}

?>