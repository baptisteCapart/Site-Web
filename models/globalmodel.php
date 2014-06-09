<?php 
function recupererdonnees($table, $tableID, $id){
	global $bdd;
	$sql = "SELECT * from $table where $tableID ='$id'";
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
  	$donnee = $req-> fetch();
  	return $donnee;
}
?>