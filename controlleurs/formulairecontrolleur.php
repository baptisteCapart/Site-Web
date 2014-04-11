<?php

if(!empty($_POST['pseudo']) AND !empty ($_POST['mdp']) AND !empty ($_POST['mdp2']) AND !empty ($_POST['mail']) AND !empty ($_POST['ville']) AND !empty ($_POST['codepostal']) AND !empty ($_POST['pays']) AND !empty ($_POST['sexe']) )
{

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
		$age = mysql_real_escape_string(htmlspecialchars($_POST['age']));
		var_dump($age);	

		$photodeprofil = "";
		$photodecover = "";


		if(!empty($_POST['photodeprofil'])){
			$photodeprofil = mysql_real_escape_string(htmlspecialchars($_POST['photodeprofil']));
		}
		if(!empty($_POST['photodecover'])){
			$photodecover = mysql_real_escape_string(htmlspecialchars($_POST['photodecover']));
		} 	

		$mdp = sha1($mdp);


		include ('models/membremodel.php');
		$validation = verifpseudo($pseudo);
		if ($validation == true){
			insert($pseudo, $mdp, $mail , $age, $codepostal, $ville ,$sexe, $pays,$photodeprofil, $photodecover);
		}else{
			echo '<span +class = "erreur">ce pseudo est déjà utilisé</span>';
		}

	} else {
	echo '<span class="erreur">Les deux mots de passe que vous avez rentrés ne correspondent pas</span>';
	}


include ('views/formulaire.php');

} else {

echo '<span class="erreur">Veuillez remplir tous les champs</span>';
include ('views/formulaire.php');


}
?>