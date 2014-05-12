<?php

include ('models/forummodel.php');

	if(!empty($_POST['name']) AND !empty($_POST['description']))
	{
		$name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
		$description = mysql_real_escape_string(htmlspecialchars($_POST['description']));
		if ( isset ($_GET['categorie']) )
		{
			$categorie = $_GET['categorie'];
			newtopic ($name, $description, $_SESSION['id'],$categorie);
		}
	}
if ( isset ($_GET['categorie']) )
{
	$categorie = $_GET['categorie'];
	$topicList=listeTopic($categorie);
}
include("controlleurs/bannierecontrolleur.php");
include("views/liste_topicview.php");
include("views/footer.php");

?>

