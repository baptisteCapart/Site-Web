<?php 



function insertConcert($nom, $jour ,$description, $début, $duree, $message, $photocover, $salle_id, $artiste_id, $inviteur)
{
	global $bdd;
	$topic_id = newtopic();
	$bdd->query("INSERT INTO concert(nom, jour, heure, duree, description, message, salle_id, artiste_id, photocover, topic_id, inviteur) 
		VALUES ('$nom', '$jour', '$début', '$duree', '$description', '$message', '$salle_id', '$artiste_id', '$photocover', '$topic_id', '$inviteur')") or die(print_r($bdd->errorInfo()));
	newpost($message,$topic_id);
}

function nouveauMessageA($id){
	global $bdd;
	$result= $bdd->query ("SELECT artiste_id from concert where artiste_id = '$id' and non_lu =1 and inviteur = 0");
	$result2 = $result->fetch();
	if (!$result2){
		return false;

	}else{
		return true;
	}
}

function nouveauMessageS($id){
	global $bdd;
	$result = $bdd->query ("SELECT concert_id from concert where salle_id = '$id' and non_lu =1 and inviteur = 1");
	$result2 = $result->fetch();
	if (!$result2){
		return false;

	}else{
		return true;
	}
}


function updateConcert($nom, $jour ,$description, $début, $duree, $message, $photocover, $id)
{
	global $bdd;

	$bdd->query("UPDATE concert 
		SET nom='$nom',
			jour='$jour',
			heure='$heure',
			duree='$duree',
			description='$description',
			message= '$message',
			photocover='$photocover'

		WHERE concert_id='$id'");
}

function newtopic ()
{
	global $bdd;
	$public = 1;
	$bdd->query("INSERT INTO topic (public) VALUES ('$public')");
	$sql = $bdd->query("SELECT id_topic from topic where public = 1 order by id_topic DESC limit 1") or die(print_r($bdd->errorInfo()));
	$req = $sql->fetch();
	return $req['id_topic'];
}

function newpost ($message, $topic_id)
{
	global $bdd;
	$bdd->query("INSERT INTO post (contenu, topic_id) VALUES ( '$message', '$topic_id')") or die (print_r($bdd->errorInfo()));
}
 ?>