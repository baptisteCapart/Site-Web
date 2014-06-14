<?php 

function insertPhoto($tableID,$id,$chemin){
	global $bdd;
	$req=$bdd->query("INSERT INTO photoevent(chemin,datephoto,$tableID) VALUES (".$bdd->quote($chemin).",CURDATE(),'$id')")or die(print_r($bdd->errorInfo()));


$req2 = $bdd->query("SELECT photo_id FROM photoevent WHERE $tableID = '$id' order by photo_id DESC limit 1") or die(print_r($bdd->errorInfo()));
	$res = $req2->fetch();
	return $res['photo_id'] ;
}






function photoUpdateA($artiste_id,$id,$photo){
	global $bdd;
	$bdd->query("UPDATE photoevent 
	SET chemin=".$bdd->quote($photo)."
	WHERE photo_id='$id'");
	$artiste=recupererdonnees('artiste', 'artiste_id', $artiste_id);
	$description = "".$artiste['nom']." a ajouté une photo sur sa page, vous pouvez aller la consulter";
	$description = htmlspecialchars($description);
	$bdd->query("INSERT INTO news(typenews,datenews, artiste_id,photocover,description, lien) 
		VALUES (3,CURDATE(),$artiste_id,".$bdd->quote($photo).", ".$bdd->quote($description).", 'index.php?page=pageartistecontrolleur&onglet=5&id=".$artiste['artiste_id']."')") or die(print_r($bdd->errorInfo()));	
}

function photoUpdateS($salle_id,$id,$photo){
	global $bdd;
	$bdd->query("UPDATE photoevent 
	SET chemin=".$bdd->quote($photo)."
	WHERE photo_id='$id'");
	$salle=recupererdonnees('salle', 'salle_id', $salle_id);
	$description = "".$salle['nom']." a ajouté une photo sur sa page, vous pouvez aller la consulter";
	$description = htmlspecialchars($description);
	$bdd->query("INSERT INTO news(typenews,datenews, salle_id,photocover,description, lien) 
		VALUES (3,CURDATE(),$salle_id,".$bdd->quote($photo).", ".$bdd->quote($description).", 'index.php?page=pageSallecontrolleur&ongletSalle=5&id=".$salle['salle_id']."')") or die(print_r($bdd->errorInfo()));	
}



function Photo($user){
	if (isset($_GET['id'])) {
		global $bdd;
	 	$req = $bdd-> query('SELECT chemin FROM photoevent where '.$user.' ='.$_GET["id"].'') or die(print_r($bdd->errorInfo()));
		return $req;
	}
}

// function PhotoS(){
// 	if (isset($_GET['id'])) {
// 		global $bdd;
// 	 	$req = $bdd-> query('SELECT chemin FROM photoevent where salle_id ='.$_GET["id"].'') or die(print_r($bdd->errorInfo()));
// 		return $req;
// 	}
// }

function newspersoA($membre_id){
	global $bdd;
	$sql=$bdd->query("SELECT * from news inner join suivre where news.artiste_id = suivre.artiste_id AND suivre.membre_id = '$membre_id' and suivre.artiste_id!=0 order by news.news_id DESC limit 5");
	return $sql;
}

// function newsp($membre_id, $id){
// 	global $bdd;
// 	$tab = array();
// 	$sql=$bdd->query("SELECT $id from suivre where membre_id = '$membre_id'");
// 	foreach ($sql as $news) {
// 		$req=$bdd->query("SELECT * from news where '$id'=".$news[$id]);
// 		$tab[] = $req;
// 	}
// 	return $tab;
// }


function newspersoS($membre_id){
	global $bdd;
	$sql=$bdd->query("SELECT * from news inner join suivre where news.salle_id = suivre.salle_id AND suivre.membre_id = '$membre_id' and suivre.salle_id!=0 order by news.news_id desc limit 5");
;	return $sql;

}

?>