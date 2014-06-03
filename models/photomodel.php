<?php 

function insertPhoto($id,$chemin){
	global $bdd;
	$req=$bdd->query("INSERT INTO photoevent(chemin,datephoto,artiste_id) VALUES ('$chemin',CURDATE(),'$id')")or die(print_r($bdd->errorInfo()));
	$artiste=recupererArtiste2($id);
	$description = "".$artiste['nom']." a ajouté une photo sur sa page, vous pouvez aller la consulter";
	$description = mysql_real_escape_string(htmlspecialchars($description));
	$bdd->query("INSERT INTO news(datenews, artiste_id,photocover,description, lien, photo) 
		VALUES (CURDATE(),$id,'$chemin', '$description', 'index.php?page=pageartistecontrolleur&onglet=5&id=".$artiste['artiste_id']."', 1)") or die(print_r($bdd->errorInfo()));

}

function Photo(){
	if (isset($_GET['id'])) {
		global $bdd;
	 	$req = $bdd-> query('SELECT chemin FROM photoevent where artiste_id ='.$_GET["id"].'') or die(print_r($bdd->errorInfo()));
		return $req;
	}
}

function newsperso($membre_id){
	global $bdd;
	$sql=$bdd->query("SELECT * from news where EXISTS (SELECT DISTINCT artiste_id from suivre where suivre.membre_id = $membre_id)");
	return $sql;
}

?>