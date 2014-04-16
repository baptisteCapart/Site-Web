<?php


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


function newtopic ($name, $description){
	global $bdd;
	$bdd->query("INSERT INTO topic (nom, description)
		VALUES ('$name','$description')");
}

function newpost ($pseudo, $message, $id_topic)
{
	global $bdd;
	$membre_id = $bdd->query('SELECT membre_id FROM membre WHERE pseudo = "$pseudo"');
	$bdd->query("INSERT INTO post VALUES($message, NOW(), id_topic, $membre_id)");
}

function listeTopic(){

	global $bdd;
 	$req = $bdd-> query('SELECT id_topic, nom FROM topic ORDER BY nom') or die(print_r($bdd->errorInfo()));
	return $req;

}
?>