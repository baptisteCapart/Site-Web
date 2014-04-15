<?php

include("models/forummodel.php");

if(isset($_POST['name']) AND isset($_POST['description']))
{
	$faire = newtopic ($_POST['name'], $_POST['description']);
}

include("bannierecontrolleur.php");
include("views/liste_topicview.php");
include("views/footer.php");

?>

