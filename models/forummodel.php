<?php

function dropTopic($id){
	global $bdd;
	$bdd->query("DELETE FROM topic WHERE topic_id= $id") or die(print_r($bdd->errorInfo()));
}

function topicname ($topic)
{
	if (isset($_GET['topic'])) {

	global $bdd;
	$sql = ('SELECT * from topic where id_topic ='.$_GET["topic"].'');
	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
	$topic_name = $req-> fetch();
	return $topic_name;
	}
}

function membername ($membre_id)
{
	global $bdd;
	$req = ("SELECT pseudo FROM membre WHERE membre_id=".$membre_id);
	$rep = $bdd->query($req);
	$but = $rep->fetch();
	return $but['pseudo'];
}

function newtopic ($name, $description, $membre_id, $categorie)
{
	global $bdd;
	$nb = 0;
	$bdd->query("INSERT INTO topic (nom, description, nombre_message, membre_id,categorie)
		VALUES ('$name','$description', '$nb', '$membre_id','$categorie')");
}

function newpost ($membre_id, $message, $topic_id)
{
	global $bdd;
	$bdd->query("INSERT INTO post (contenu, topic_id, membre_id, datepost) VALUES ( '$message', '$topic_id', '$membre_id', NOW())") or die (print_r($bdd->errorInfo()));
	$res = $bdd->query("SELECT nombre_message FROM topic WHERE id_topic=".$topic_id);
	$res2 = $res->fetch();
	$nb_posts = $res2['nombre_message'] + 1;
	$bdd->query("UPDATE topic SET nombre_message=$nb_posts WHERE id_topic=".$topic_id);
}

function listePost ($topic_id)
{
	global $bdd;
	$req = $bdd->query("SELECT * FROM post WHERE topic_id = '$topic_id' ORDER BY id_post DESC") or die (print_r($bdd->errorInfo()));
	return $req;
}

function listeTopic ($categorie)
{
	global $bdd;
 	$req = $bdd-> query("SELECT * FROM topic WHERE categorie = '$categorie' ORDER BY nom") or die (print_r($bdd->errorInfo()));
	return $req;

}
?>