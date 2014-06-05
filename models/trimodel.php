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
?>