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
?>