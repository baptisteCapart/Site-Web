<?php 



function dropMembre($id){
	global $bdd;
	$bdd->query("DELETE FROM membre WHERE membre_id= $id") or die(print_r($bdd->errorInfo()));
}

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


function insert($pseudo, $mdp, $mail, $age ,$codepostal, $ville ,$sexe, $pays,$photodeprofil, $photodecover)
{
	global $bdd;
	$bdd->query("INSERT INTO membre(pseudo, mot_de_passe, mail, date_de_naissance, code_postal, ville, sexe, pays, photoprofil, photocover )  VALUES ('$pseudo', '$mdp', '$mail' , '$age','$codepostal', '$ville' ,'$sexe', '$pays','$photodeprofil', '$photodecover')");
}

function photoProf($membre_id,$photo){
	global $bdd;
	$bdd->query("UPDATE membre 
	SET photoprofil='$photo'
	WHERE membre_id='$membre_id'");
}

function photoCov($membre_id,$photo){
	global $bdd;
	$bdd->query("UPDATE membre 
	SET photocover='$photo'
	WHERE membre_id='$membre_id'");
}

function recuperer($id){
	global $bdd;
	$sql = "SELECT * from membre where membre_id ='$id'";
 	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
  	$donnee = $req-> fetch();
  	return $donnee;
}


function modifier($id, $mail, $age ,$codepostal, $ville ,$sexe, $pays,$photodeprofil, $photodecover){
	global $bdd;
	$bdd->query("UPDATE membre 
		SET mail='$mail',
			sexe='$sexe',
			date_de_naissance='$age',
			code_postal='$codepostal',
			ville='$ville',
			pays= '$pays',
			photocover='$photodecover',
			photoprofil='$photodeprofil'

		WHERE membre_id='$id'");
}

?>
