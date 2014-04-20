<?php
include('models/forummodel.php');

if(isset($_GET['topic']))
{
	$topic_name = topicname($_GET['topic']);
}
else
{
	header('Location: index.php?page=wrong_topiccontroleur');
}



if(isset($_POST['message'])){
	
		if($_SESSION['pseudo'] != ""){
			$newpost = newpost($_SESSION['id'], $_POST['message'], $_GET['topic']);
		}else{
	   		header ('location: index.php?page=formulairecontrolleur');
		}
}


$listepost = listePost ($_GET['topic']);

include('controlleurs/bannierecontrolleur.php');
include('views/discussview.php');
include('views/footer.php');
?>
