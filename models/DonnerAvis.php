
<?php
function Avis ($membre_id, $attribut ,$value, $contenu, $note)
{
	global $bdd;
	$bdd->query("INSERT INTO donner_avis (membre_id, $attribut, contenu, note) VALUES ('$membre_id', '$value', '$contenu', '$note')") or die (print_r($bdd->errorInfo()));
}
function dropAvis($id){
	global $bdd;
	$bdd->query("DELETE FROM donner_avis WHERE donner_avis_id= $id") or die(print_r($bdd->errorInfo()));
}



function PossedeAvis($membre_id, $attribut, $value){
	global $bdd;
	$result = $bdd->query ("SELECT membre_id from donner_avis where membre_id = '$membre_id' and $attribut = '$value'");
	$result2 = $result->fetch();
	if (!$result2){
		return false;

	}else{
		return true;
	}

}



function listeAvis ($attribut, $value)
{
	global $bdd;
	$req = $bdd->query("SELECT * FROM donner_avis WHERE $attribut='$value' ORDER BY donner_avis_id DESC") or die (print_r($bdd->errorInfo()));
	return $req;
}



function AuteurAvis ($membre_id)
{
	global $bdd;
	$req = ("SELECT pseudo FROM membre WHERE membre_id=".$membre_id);
	$rep = $bdd->query($req);
	$but = $rep->fetch();
	return $but['pseudo'];
}

?>