<?php
include('models/membremodel.php');

// // initialisation des valeurs par défaut :
// if(!empty($_POST['pseudo']))
// { $dftpseudo = $_POST['pseudo']; }
// else
// { $dftpseudo = ""; }


// if(!empty($_POST['mail']))
// { $dftmail = $_POST['mail']; }
// else
// { $dftmail = ""; }


// if(!empty($_POST['codepostal']))
// { $dftcodepostal = $_POST['codepostal']; }
// else
// { $dftcodepostal = ""; }


// if(!empty($_POST['pays']))
// { $dftpays = $_POST['pays']; }
// else
// { $dftpays = ""; }


// if(!empty($_POST['ville']))
// { $dftville = $_POST['ville']; }
// else
// { $dftville = ""; }


// if(!empty($_POST['age']))
// { $dftage = $_POST['age']; }
// else
// { $dftage = ""; }

 $error = "";
if(!empty($_POST['pseudo']) AND !empty ($_POST['mdp']) AND !empty ($_POST['mdp2']) AND !empty ($_POST['mail']) 
	AND !empty ($_POST['ville']) AND !empty ($_POST['codepostal']) AND !empty ($_POST['pays']) AND !empty ($_POST['sexe']) )
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

		$photodeprofil = "";
		$photodecover = "";


		if(!empty($_POST['photodeprofil']))
		{
			$photodeprofil = mysql_real_escape_string(htmlspecialchars($_POST['photodeprofil']));
		}else{
			$photodeprofil = "profildefaut.jpg";
		}
		if(!empty($_POST['photodecover']))
		{
			$photodecover = mysql_real_escape_string(htmlspecialchars($_POST['photodecover']));
		} else{
			$photodecover = "coverdefaut.jpg";
		}	

		$mdp = sha1($mdp);


		$validation = verifpseudo($pseudo);
		if ($validation == true)
		{
			insert($pseudo, $mdp, $mail , $age, $codepostal, $ville ,$sexe, $pays,$photodeprofil, $photodecover);
			header('location: index.php?page=register_complete_controlleur');
		}
		else
		{
			$error = "Ce pseudo est déjà utilisé";
		}

	}
	else 
	{
		$error = "Les deux mots de passe que vous avez rentrés ne correspondent pas";
	}
}
else 
{
	if(!empty($_POST['pseudo']) OR !empty ($_POST['mdp']) OR !empty ($_POST['mdp2']) OR !empty ($_POST['mail']) OR !empty ($_POST['ville']) OR !empty ($_POST['codepostal']) OR !empty ($_POST['pays']) OR !empty ($_POST['sexe']))
	{
		$error = "Veuillez remplir tous les champs, seules les photos sont facultatives";
	}
}

include('controlleurs/bannierecontrolleur.php');
include ('views/formulaire.php');
include ('views/footer.php');

?>