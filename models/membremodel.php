<?php 



function dropMembre($id){
	global $bdd;
	$bdd->query("DELETE FROM membre WHERE membre_id= $id") or die(print_r($bdd->errorInfo()));
	$bdd->query("DELETE FROM artiste WHERE membre_id= $id") or die(print_r($bdd->errorInfo()));
	$bdd->query("DELETE FROM salle WHERE membre_id= $id") or die(print_r($bdd->errorInfo()));
	$bdd->query("DELETE FROM donner_avis WHERE membre_id= $id") or die(print_r($bdd->errorInfo()));
	$bdd->query("DELETE FROM post WHERE membre_id= $id") or die(print_r($bdd->errorInfo()));
}

function verification($login){
	global $bdd;
	$sql = "SELECT membre_id, mot_de_passe from membre where pseudo =".$bdd->quote($login)."";
 	$req = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
  	$donnee = $req->fetch();
  	return $donnee;
}
function verifpseudo($pseudo){
	global $bdd;

	$result = $bdd->query ("SELECT  pseudo from membre where pseudo = ".$bdd->quote($pseudo)."");
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
	$bdd->query("INSERT INTO membre(pseudo, mot_de_passe, mail, date_de_naissance, code_postal, ville, sexe, pays, photoprofil, photocover )
		VALUES (".$bdd->quote($pseudo).", ".$bdd->quote($mdp).", ".$bdd->quote($mail)." , ".$bdd->quote($age).",".$bdd->quote($code_postal).",
		 ".$bdd->quote($ville)." ,'$sexe', ".$bdd->quote($pays).",".$bdd->quote($photodeprofil).", ".$bdd->quote($photodecover).")");
}

function photoProf($membre_id,$photo){
	global $bdd;
	$bdd->query("UPDATE membre 
	SET photoprofil=".$bdd->quote($photo)."
	WHERE membre_id=".$membre_id."");
}

function photoCov($membre_id,$photo){
	global $bdd;
	$bdd->query("UPDATE membre 
	SET photocover=".$bdd->quote($photo)."
	WHERE membre_id=".$membre_id."");
}

// function recuperer($id){
// 	global $bdd;
// 	$sql = "SELECT * from membre where membre_id ='$id'";
//  	$req = $bdd-> query($sql) or die(print_r($bdd->errorInfo()));
//   	$donnee = $req-> fetch();
//   	return $donnee;
// }


function modifier($id, $mail, $age ,$codepostal, $ville ,$sexe, $pays,$photodeprofil, $photodecover){
	global $bdd;
	$bdd->query("UPDATE membre 
		SET mail=".$bdd->quote($mail).",
			sexe='$sexe',
			date_de_naissance=".$bdd->quote($age).",
			code_postal=".$bdd->quote($codepostal).",
			ville=".$bdd->quote($ville).",
			pays=".$bdd->quote($pays).",
			photocover=".$bdd->quote($photodecover).",
			photoprofil=".$bdd->quote($photodeprofil)."

		WHERE membre_id=".$id." ");
}

function newpostM ($message, $membre_id, $destinataire)
{
	global $bdd;
	$bdd->query("INSERT INTO post (contenu, membre_id, destinataire, messagePrive)
	 VALUES ( ".$bdd->quote($message).", '$membre_id', $destinataire, 1)") or die (print_r($bdd->errorInfo()));
}

function memberPara ($membre_id)
{
	global $bdd;
	$req = ("SELECT * FROM membre WHERE membre_id=".$membre_id);
	$rep = $bdd->query($req);
	$but = $rep->fetch();
	return $but;
}

function listePostM ($membre_id)
{
	global $bdd;
	$req = $bdd->query("SELECT * FROM post WHERE messagePrive=1 and destinataire= '$membre_id' order by id_post DESC  ") or die (print_r($bdd->errorInfo()));
	return $req;
}

?>
