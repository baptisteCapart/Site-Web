<?php


function topicname ($topic)
{
	global $bdd;
	$topic_name = $bdd->query("SELECT nom FROM topic WHERE id_topic = $topic");
	return $topic_name;
}

function newtopic ($name, $description)
{
	global $bdd;
	$pseudo = $_SESSION['pseudo'];
	$req = $bdd->query("INSERT INTO topic (nom, nombre_messages, date_creation, description, createur)
		VALUES ($name, 0, NOW(), $description, $pseudo)");
}

function newpost ($pseudo, $message, $id_topic)
{
	global $bdd;
	$membre_id = $bdd->query('SELECT membre_id FROM membre WHERE pseudo = "$pseudo"');
	$req = $bdd->query("INSERT INTO post VALUES($message, NOW(), id_topic, $membre_id)");
}

?>