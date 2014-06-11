<?php

include ('models/forummodel.php');
include ('models/membremodel.php');
include ('models/globalmodel.php');

if(isset($_SESSION['id'])){
	$admin = recupererdonnees("membre","membre_id",$_SESSION['id']);
}

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
	
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		if(isset($_POST['supprimer4'])){
			dropTopic($id);
		}
	}

}


include("controlleurs/bannierecontrolleur.php");
include("views/liste_topicview.php");
include("views/footer.php");

?>

