<?php 

function dropArtiste($id){
	global $bdd;
	$bdd->query("DELETE FROM artiste WHERE artiste_id= $id") or die(print_r($bdd->errorInfo()));
	$bdd->query("DELETE FROM style_de_groupe WHERE artiste_id= $id") or die(print_r($bdd->errorInfo()));

}

function addstyle($message){
	global $bdd;
	$bdd->query("INSERT INTO  style_de_musique(nom) VALUES (".$bdd->quote($message).")");
}


function insertArtiste($nomartiste ,$description, $photogroupe,$membreID){
	global $bdd;
	$bdd-> query("INSERT INTO artiste(nom, description, photocover, membre_id)  
		VALUES (".$bdd->quote($nomartiste).", ".$bdd->quote($description).", ".$bdd->quote($photogroupe)." , '$membreID')") or die(print_r($bdd->errorInfo()));
	$req = $bdd->query("SELECT artiste_id FROM artiste WHERE membre_id = '$membreID'") or die(print_r($bdd->errorInfo()));
	$res = $req->fetch();
	return $res['artiste_id'] ;
}

function finishartiste ($artiste_id, $style){
	global $bdd;
	$bdd->query("INSERT INTO style_de_groupe (artiste_id, style_de_musique) VALUES ('$artiste_id', '$style')");
}

function photoCA($id,$photo){
	global $bdd;
	$bdd->query("UPDATE artiste 
	SET photocover=".$bdd->quote($photo)."
	WHERE artiste_id='$id'");
}


function recuperer4($id){
	global $bdd;
	$sql = "SELECT * from artiste where artiste_id ='$id'";
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	return $req;
}

function listeStyle($artiste_id){
	global $bdd;
	$sql=$bdd->query("SELECT style_de_musique from style_de_groupe where artiste_id='$artiste_id'");
	return $sql;
}



function AuthentificationArtiste($id){
	global $bdd;
	$sql = "SELECT membre_id from artiste where artiste_id ='$id'";
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	$chef = $req-> fetch();
  	return $chef;
}


function PossedeArtiste($membre_id){
	global $bdd;
	$result = $bdd->query ("SELECT membre_id from artiste where membre_id = '$membre_id'");
	$result2 = $result->fetch();
	if (!$result2){
		return true;

	}else{
		return false;
	}

}

function MaPageArtiste($membre_id){
	global $bdd;
	$sql = "SELECT artiste_id from artiste where membre_id = '$membre_id' ";
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	$chef = $req-> fetch();
  	return $chef;
}


function modifierArtiste($id, $nom, $description ,$photogroupe){
	global $bdd;
	$bdd->query("UPDATE artiste 
		SET nom=".$bdd->quote($nom).",
			description=".$bdd->quote($description).",
			photocover=".$bdd->quote($photogroupe)."

		WHERE artiste_id=".$id." ");
}







function getStyle(){
	global $bdd;
	$req=$bdd->query("SELECT nom FROM style_de_musique order by nom")
	or die (print_r($bdd->errorInfo()));
	return $req;
}

function getArtistes($styles){
	global $bdd;
	$infos = array();
	foreach ($styles as $key => $value) {
		$req = $bdd->query("SELECT * FROM artiste INNER JOIN style_de_groupe WHERE artiste.artiste_id = style_de_groupe.artiste_id AND style_de_groupe.style_de_musique = '".$value['nom']."'")
		or die (print_r($bdd->errorInfo()));
		$key = $value['nom'];
		$value = $req;
		$infos[$key] = $value;
	}
	return $infos;
}




?>