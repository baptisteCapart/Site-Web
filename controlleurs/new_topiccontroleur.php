<?php 

include("models/forummodel.php");
include("controlleurs/bannierecontrolleur.php");

if ( isset ($_GET['categorie']) )
		{
			$categorie = $_GET['categorie'];
		}
include('views/new_topicview.php');
include("views/footer.php");



?>