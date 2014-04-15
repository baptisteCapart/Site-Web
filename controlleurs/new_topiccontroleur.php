<?php 

include("models/forummodel.php");
include("controlleurs/bannierecontrolleur.php");

if(!empty($_POST['name']) AND !empty($_POST['description']))
{
	$name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
	$description = mysql_real_escape_string(htmlspecialchars($_POST['description']));
	var_dump($name);
	newtopic ($name, $description);
	include('views/liste_topicview.php');
include("views/footer.php");

}else{
include('views/new_topicview.php');
include("views/footer.php");

}


?>