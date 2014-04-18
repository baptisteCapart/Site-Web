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


function newtopic ($name, $description, $membre_id){
	global $bdd;
	$nb = 0;
	$bdd->query("INSERT INTO topic (nom, description, nombre_message, $membre_id)
		VALUES ('$name','$description', '$nb', '$membre_id')");
}

function newpost ($pseudo, $message, $id_topic)
{
	global $bdd;
	$membre_id = $bdd->query('SELECT membre_id FROM membre WHERE pseudo = "$pseudo"');
	$bdd->query("INSERT INTO post VALUES($message, NOW(), id_topic, $membre_id)");
}

function listeTopic(){

	global $bdd;
 	$req = $bdd-> query('SELECT * FROM topic ORDER BY nom') or die(print_r($bdd->errorInfo()));
	return $req;

}
?>