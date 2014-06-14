<?php
include('models/forummodel.php');
include ('models/membremodel.php');
include ('models/globalmodel.php');

if(isset($_SESSION['id'])){
	$admin = recupererdonnees("membre","membre_id",$_SESSION['id']);
}

if(isset($_GET['id'])){

	$id=$_GET['id'];
}
if(isset($_GET['topic']))
{
	$topic = $_GET['topic'];
	$topic_info = recupererdonnees('topic', 'id_topic', $topic);
	$categorie = $topic_info['categorie'];
}
if(isset($_POST['supprimer'])){

		dropPost($id);
		header('location: index.php?page=discusscontroleur&topic='.$topic.'');
	}

if(isset($_GET['topic']))
{
	$topic_name = topicname($_GET['topic']);
}


else
{
	header('Location: index.php?page=wrong_topiccontroleur');
}



if(isset($_POST['message'])){
	
	$message = $_POST['message'];
	$message = nl2br($message);
	$message = htmlspecialchars($message);
	

		if($_SESSION['pseudo'] != ""){
			$newpost = newpost($_SESSION['id'], $message, $_GET['topic']); 
		}else{
	   		header ('location: index.php?page=formulairecontrolleur');
		}
}


$listepost = listePost ($_GET['topic']);

include('controlleurs/bannierecontrolleur.php');
include('views/discussview.php');
include('views/footer.php');
?>
