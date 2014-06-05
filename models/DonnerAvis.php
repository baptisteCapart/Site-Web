
<?php
function AvisSalle ($membre_id, $salle_id, $contenu, $note)
{
	global $bdd;
	$bdd->query("INSERT INTO donner_avis (membre_id, salle_id, contenu, note) VALUES ('$membre_id', '$salle_id', '$contenu', '$note')") or die (print_r($bdd->errorInfo()));
}


function AvisArtiste ($membre_id, $artiste_id, $contenu, $note)
{
	global $bdd;
	$bdd->query("INSERT INTO donner_avis (membre_id, artiste_id, contenu, note) VALUES ('$membre_id', '$artiste_id', '$contenu', '$note')") or die (print_r($bdd->errorInfo()));
}

function AvisConcert ($membre_id, $concert_id, $contenu, $note)
{
	global $bdd;
	$bdd->query("INSERT INTO donner_avis (membre_id, concert_id, contenu, note) VALUES ('$membre_id', '$concert_id', '$contenu', '$note')") or die (print_r($bdd->errorInfo()));
}

function listeAvisSalle ($salle_id)
{
	global $bdd;
	$req = $bdd->query('SELECT * FROM donner_avis WHERE salle_id='.$salle_id.' ORDER BY donner_avis_id DESC') or die (print_r($bdd->errorInfo()));
	return $req;
}

function listeAvisArtiste ($artiste_id)
{
	global $bdd;
	$req = $bdd->query('SELECT * FROM donner_avis WHERE artiste_id='.$artiste_id.' ORDER BY donner_avis_id DESC') or die (print_r($bdd->errorInfo()));
	return $req;
}

function listeAvisConcert ($concert_id)
{
	global $bdd;
	$req = $bdd->query('SELECT * FROM donner_avis WHERE concert_id='.$concert_id.' ORDER BY donner_avis_id DESC') or die (print_r($bdd->errorInfo()));
	return $req;
}

function AuteurAvis ($membre_id)
{
	global $bdd;
	$req = ("SELECT pseudo FROM membre WHERE membre_id=".$membre_id);
	$rep = $bdd->query($req);
	$but = $rep->fetch();
	return $but['pseudo'];
}

?>