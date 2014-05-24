<?php 

function recupererArtiste2($id){
	global $bdd;
	$sql = "SELECT * from artiste where artiste_id ='$id'";
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req-> fetch();
  	return $donnee;
}


function insertExtrait($artisteID, $nom){
	global $bdd;
	$bdd-> query("INSERT INTO extrait(nom, artiste_id)  VALUES ('$nom', '$artisteID')");
	$artiste=recupererArtiste2($artisteID);
	$description = "Tout nouveau morceau de ".$artiste['nom']." sorti sur sa page, venez l'écouter !";
	$description = mysql_real_escape_string(htmlspecialchars($description));
	$bdd->query("INSERT INTO news(datenews, photocover,description, lien) 
		VALUES (CURDATE(),'".$artiste['photocover']."', '$description', 'index.php?page=pageartistecontrolleur&id=".$artiste['artisteID']."' )") or die(print_r($bdd->errorInfo()));
}

function listeMusiques(){
if (isset($_GET['id'])) {
	global $bdd;
 	$req = $bdd-> query('SELECT nom FROM extrait where artiste_id ='.$_GET["id"].'') or die(print_r($bdd->errorInfo()));
	return $req;
}
}

?>