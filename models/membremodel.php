<?php 

function verification($login){
	global $bdd;
	$sql = "SELECT membre_id, mot_de_passe from membre where pseudo ='$login'";
 	$req = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
  	$donnee = $req->fetch();
  	return $donnee;
}

function verifpseudo($pseudo){
	global $bdd;

	$result = $bdd->query ("SELECT  pseudo from membre where pseudo = '$pseudo'");
	$result2 = $result->fetch();
	if (!$result2){
		return true;

	}else{
		return false;
}


}

function insert($pseudo, $mdp, $mail ,$codepostal, $ville ,$sexe, $pays,$photodeprofil, $photodecover){
	global $bdd;

	$bdd->query("INSERT INTO membre(pseudo, mot_de_passe, mail, code_postal, ville, sexe, pays, photoprofil, photocover )  VALUES ('$pseudo', '$mdp', '$mail' ,'$codepostal', '$ville' ,'$sexe', '$pays','$photodeprofil', '$photodecover')");
}



function recuperer($id){
	global $bdd;
	$sql = "SELECT * from membre where membre_id ='$id'";
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
 	
  	$donnee = $req-> fetch();
  	return $donnee;
}
 ?>





