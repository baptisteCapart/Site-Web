<?php 

function insertPhoto($id,$chemin){
	global $bdd;
	$req=$bdd->query("INSERT INTO photoevent(chemin,datephoto,artiste_id) VALUES ('$chemin',CURDATE(),'$id')")or die(print_r($bdd->errorInfo()));
	var_dump($req);
	
}

function Photo(){
	if (isset($_GET['id'])) {
		global $bdd;
	 	$req = $bdd-> query('SELECT chemin FROM photoevent where artiste_id ='.$_GET["id"].'') or die(print_r($bdd->errorInfo()));
		return $req;
	}
}

?>