<?php



include("controlleurs/bannierecontrolleur.php");
include ('models/forummodel.php');
$topicList=listeTopic();
include("views/liste_topicview.php");
include("views/footer.php");

?>

