<?php



include("controlleurs/bannierecontrolleur.php");
include ('models/forummodel.php');
$topicList=listeTopic();
var_dump($topicList);
include("views/liste_topicview.php");
include("views/footer.php");

?>

