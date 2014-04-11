<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare('INSERT INTO forum_discussion (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

header('Location: first_discussmodel.php');
?>