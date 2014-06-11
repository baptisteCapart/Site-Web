<?php 
function trialpha($table){
	global $bdd;
	$sql = $bdd-> query("SELECT * from $table order by nom") or die(print_r($bdd->errorInfo()));
	return $sql;
}

function affichage($lettre, $table){
	global $bdd;
	$sql = $bdd-> query("SELECT * from $table where nom LIKE '$lettre%' order by nom") or die(print_r($bdd->errorInfo()));
	return $sql;
}

function triLieu($table){
	global $bdd;
	$sql = $bdd-> query("SELECT * from $table order by code_postal") or die(print_r($bdd->errorInfo()));
	return $sql;
}

function triDate(){
	global $bdd;
	$sql = $bdd-> query("SELECT * from concert where jour>CURDATE() AND accord = 1 order by jour limit 30") or die(print_r($bdd->errorInfo()));
	return $sql;
}

function classement($table,$tableID){
	global $bdd;
	$infos = array();
	$req = $bdd->query("SELECT * FROM $table WHERE EXISTS (SELECT DISTINCT $tableID FROM donner_avis WHERE $table.$tableID = donner_avis.$tableID)")
	or die (print_r($bdd->errorInfo()));
	return $req;	
}

function note($id,$tableID){
	global $bdd;
	$req = $bdd->query("SELECT $tableID, AVG(note) FROM donner_avis WHERE $tableID = '$id' GROUP BY $tableID")
	or die (print_r($bdd->errorInfo()));
	$res = $req->fetch();
	return $res['AVG(note)'];
}

function triconcertlieu (){
	global $bdd;
	$sql=$bdd->query("SELECT salle.code_postal, salle.nom, concert.concert_id, concert.nom, concert.photocover from salle, concert 
		where salle.salle_id = concert.salle_id and concert.accord = 1 order by salle.code_postal, salle.nom")or die (print_r($bdd->errorInfo()));
	return $sql;
}

?>