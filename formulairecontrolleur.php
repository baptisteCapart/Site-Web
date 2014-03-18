<?php
include('formulaire.php');
if(!empty($_POST['pseudo']) AND !empty ($_POST['mdp']) AND !empty ($_POST['mdp2']) AND !empty ($_POST['mail']) AND !empty ($_POST['ville']) AND !empty ($_POST['codepostal']) AND !empty ($_POST['pays']) AND !empty ($_POST['sexe']) AND !empty ($_POST['photodecover']) AND !empty ($_POST['photodeprofil']))
{
// D'abord, je me connecte à la base de données.
	mysql_connect("localhost", "root", "");
	mysql_select_db("mydb");

// Je mets aussi certaines sécurités ici…
	$mdp = mysql_real_escape_string(htmlspecialchars($_POST['mdp']));
	$mdp2 = mysql_real_escape_string(htmlspecialchars($_POST['mdp2']));
	if($mdp == $mdp2)
	{
		
		$pseudo = mysql_real_escape_string(htmlspecialchars($_POST['pseudo']));
		$mail = mysql_real_escape_string(htmlspecialchars($_POST['mail']));
		$sexe = mysql_real_escape_string(htmlspecialchars($_POST['sexe']));
		$codepostal = mysql_real_escape_string(htmlspecialchars($_POST['codepostal']));
		$pays = mysql_real_escape_string(htmlspecialchars($_POST['pays']));
		$ville = mysql_real_escape_string(htmlspecialchars($_POST['ville']));
		$photodeprofil = mysql_real_escape_string(htmlspecialchars($_POST['photodeprofil']));
		$photodecover = mysql_real_escape_string(htmlspecialchars($_POST['photodecover']));

// Je vais crypter le mot de passe.
		$mdp = sha1($mdp);

		mysql_query("INSERT INTO membre(pseudo, mot_de_passe, mail, code_postal, ville, sexe, pays, photoprofil, photocover )  VALUES ('$pseudo', '$mdp', '$mail' ,'$codepostal', '$ville' ,'$sexe', '$photodeprofil', '$photodecover')");
	}

	else
	{
		echo '<span class="erreur">Les deux mots de passe que vous avez rentrés ne correspondent pas</span>';
	}
}
?>