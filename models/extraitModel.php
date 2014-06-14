<?php 


function insertExtrait($artisteID, $nomIni){
	global $bdd;
	$bdd-> query("INSERT INTO extrait(nomIni, artiste_id)  VALUES (".$bdd->quote($nomIni).", '$artisteID')");
	$artiste=recupererdonnees("artiste","artiste_id",$artisteID);
	$description = "Tout nouveau morceau de ".$artiste['nom']." sorti sur sa page, venez l'écouter !";
	$description = htmlspecialchars($description);
	$bdd->query("INSERT INTO news(artiste_id,typenews, datenews, photocover,description, lien) 
		VALUES (".$artiste['artiste_id'].",2, CURDATE(),'".$artiste['photocover']."', ".$bdd->quote($description).", 'index.php?page=pageartistecontrolleur&onglet=3&id=".$artiste['artiste_id']."')") or die(print_r($bdd->errorInfo()));
	$req = $bdd->query("SELECT extrait_id FROM extrait WHERE artiste_id = '$artisteID' order by extrait_id DESC limit 1") or die(print_r($bdd->errorInfo()));
	$res = $req->fetch();
	return $res['extrait_id'] ;
}

function updateExtrait($extrait_id, $musique){
	global $bdd;
	$bdd->query("UPDATE extrait 
	SET nom=".$bdd->quote($musique)."
	WHERE extrait_id='$extrait_id'");	
}

function listeMusiques(){
if (isset($_GET['id'])) {
	global $bdd;
 	$req = $bdd-> query('SELECT nom, nomIni FROM extrait where artiste_id ='.$_GET["id"].'') or die(print_r($bdd->errorInfo()));
	return $req;
}
}

?>