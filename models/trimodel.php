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
	$sql = $bdd-> query("SELECT * from concert where jour>CURDATE() order by jour limit 30") or die(print_r($bdd->errorInfo()));
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

?>