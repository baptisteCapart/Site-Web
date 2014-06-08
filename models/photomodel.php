<?php 

function insertPhotoA($artiste_id,$chemin){
	global $bdd;
	$req=$bdd->query("INSERT INTO photoevent(chemin,datephoto,artiste_id) VALUES ('$chemin',CURDATE(),'$artiste_id')")or die(print_r($bdd->errorInfo()));

	$artiste=recupererArtiste2($artiste_id);
	$description = "".$artiste['nom']." a ajouté une photo sur sa page, vous pouvez aller la consulter";
	$description = mysql_real_escape_string(htmlspecialchars($description));
	$bdd->query("INSERT INTO news(typenews,datenews, artiste_id,photocover,description, lien, photo) 
		VALUES (3,CURDATE(),$artiste_id,'$chemin', '$description', 'index.php?page=pageartistecontrolleur&onglet=5&id=".$artiste['artiste_id']."', 1)") or die(print_r($bdd->errorInfo()));
$req2 = $bdd->query("SELECT photo_id FROM photoevent WHERE artiste_id = '$artiste_id' order by photo_id DESC limit 1") or die(print_r($bdd->errorInfo()));
	$res = $req2->fetch();
	return $res['photo_id'] ;
}


function insertPhotoS($salle_id,$chemin){
	global $bdd;
	$req=$bdd->query("INSERT INTO photoevent(chemin,datephoto,salle_id) VALUES ('$chemin',CURDATE(),'$salle_id')")or die(print_r($bdd->errorInfo()));

	$salle=recuperer3($salle_id);
	$description = "".$salle['nom']." a ajouté une photo sur sa page, vous pouvez aller la consulter";
	$description = mysql_real_escape_string(htmlspecialchars($description));
	$bdd->query("INSERT INTO news(typenews, datenews, salle_id,photocover,description, lien, photo) 
		VALUES (3,CURDATE(),$salle_id,'$chemin', '$description', 'index.php?page=pageSallecontrolleur&ongletSalle=5&id=".$salle['salle_id']."', 1)") or die(print_r($bdd->errorInfo()));
	$req2 = $bdd->query("SELECT photo_id FROM photoevent WHERE salle_id = '$salle_id' order by photo_id DESC limit 1") or die(print_r($bdd->errorInfo()));
	$res = $req2->fetch();
	return $res['photo_id'] ;
}



function photoUpdate($id,$photo){
	global $bdd;
	$bdd->query("UPDATE photoevent 
	SET chemin='$photo'
	WHERE photo_id='$id'");
}


function PhotoA(){
	if (isset($_GET['id'])) {
		global $bdd;
	 	$req = $bdd-> query('SELECT chemin FROM photoevent where artiste_id ='.$_GET["id"].'') or die(print_r($bdd->errorInfo()));
		return $req;
	}
}

function PhotoS(){
	if (isset($_GET['id'])) {
		global $bdd;
	 	$req = $bdd-> query('SELECT chemin FROM photoevent where salle_id ='.$_GET["id"].'') or die(print_r($bdd->errorInfo()));
		return $req;
	}
}

function newspersoA($membre_id){
	global $bdd;
	$sql=$bdd->query("SELECT * from news where EXISTS (SELECT artiste_id from suivre where membre_id = '$membre_id' and artiste_id!=0 )limit 5");
	return $sql;
}

function newsp($membre_id, $id){
	global $bdd;
	$tab = array();
	$sql=$bdd->query("SELECT $id from suivre where membre_id = '$membre_id'");
	foreach ($sql as $news) {
		$req=$bdd->query("SELECT * from news where '$id'=".$news[$id]);
		$tab[] = $req;
	}
	return $tab;
}


function newspersoS($membre_id){
	global $bdd;
	$sql=$bdd->query("SELECT * from news where EXISTS (SELECT salle_id from suivre where membre_id = '$membre_id' and salle_id!=0)limit 5");
;	return $sql;

}

?>