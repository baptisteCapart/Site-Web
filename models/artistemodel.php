<?php 


function insertArtiste($nomartiste, $style ,$description, $photogroupe,$membreID){
	global $bdd;
	$bdd-> query("INSERT INTO artiste(nom, description, photocover, membre_id)  VALUES ('$nomartiste', '$description', '$photogroupe' , '$membreID')");
}



function recuperer2($id){
	global $bdd;
	$sql = "SELECT * from artiste where artiste_id ='$id'";
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req-> fetch();
  	return $donnee;
}

function liste(){

	global $bdd;
 	$req = $bdd-> query('SELECT artiste_id, nom FROM artiste ORDER BY nom') or die(print_r($bdd->errorInfo()));
	return $req;

}

function Authentification($id){
	global $bdd;
	$sql = 'SELECT membre_id from artiste where artiste_id ='.$_GET["id"].'';
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	$chef = $req-> fetch();
  	return $chef;
}


function modifierArtiste($id, $nom, $description ,$photogroupe){
	global $bdd;
	$bdd->query("UPDATE artiste 
		SET nom='$nom',
			description='$description',
			photocover='$photogroupe'

		WHERE artiste_id='$id'");
}

function Avis ($membre_id, $artiste_id, $contenu, $note)
{
	global $bdd;
	$bdd->query("INSERT INTO donner_avis (membre_id, artiste_id, contenu, note) VALUES ('$membre_id', '$artiste_id', '$contenu', '$note')");
}

function listeAvis ($artiste_id)
{
	global $bdd;
	$req = $bdd->query('SELECT * FROM donner_avis WHERE artiste_id='.$artiste_id.' ORDER BY donner_avis_id DESC') or die (print_r($bdd->errorInfo()));
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