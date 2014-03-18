<?php
include('formulaire.php');
if(!empty($_POST['pseudo']) and isset ($_POST['mdp']) and isset ($_POST['mdp2']) and isset ($_POST['mail']) and isset ($_POST['ville']) and isset ($_POST['codepostal']) and isset ($_POST['photo']) and isset ($_POST['pays']) and isset ($_POST['sexe']))
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
// Je vais crypter le mot de passe.
		$mdp = sha1($mdp);

		mysql_query("INSERT INTO membre(pseudo, mot_de_passe, mail, codepostal, ville, sexe, pays, photo_id )  VALUES ('$pseudo', '$mdp', '$mail' ,'$code_postal', '$ville' '$sexe')");
	}

	else
	{
		echo '<span class="erreur">Les deux mots de passe que vous avez rentrés ne correspondent pas…</span>';
	}
}
?>