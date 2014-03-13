<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Tune In Town</title>
		<rel type="stylesheet" href="" />
		<link rel="stylesheet" href="bannierestyle.css"/>
		<link rel="stylesheet" href="formulairestyle.css"/>
	</head>

	<body>
		<?php include("banniere.php"); ?>

		<div id="bienvenue">Remplis gratuitement ce formulaire d'inscription pour devenir membre de notre site et ainsi bénéficier de tous les privilèges d'un inscrit !</div>
		<div id="formulaire">
		<form class ="form2" method="post" action="envoiformulaire.php">
			<ul>
				<li>
					<div class="pseudo2"><span>Pseudo : </span><input class = "textbox" type="text" name="pseudo" value=""/></div>
					
				</li>
				<li>
					<div class="motdepasse"><span>Mot de passe : </span><input class = "textbox"  type="password" name="mdp" value=""/></div>
				</li>	
				<li>
					<div class="mail"><span>Adresse mail : </span><input class = "textbox" type="text" name="mail" value=""/></div>
					
				</li>
				<li>
					<div class="ville"><span>Ville : </span><input class = "textbox" type="text" name="ville" value=""/></div>
											
				</li>
				<li>
					<div class="codepostal"><span>Code postal : </span><input class = "textbox" type="text" name="codepostal" value=""/></div>
					
				</li>
				<li>
					<div class="photoprofil"><span>Photo de profil : </span><input class = "textbox" type="file" name="photo" /></div>
				</li>
				<li>
					<div class="photocouv"><span>Photo de couverture :</span><input class = "textbox" type="file" name="photo" /></div>					
				</li>
				<li>
					<input class = "envoyer" type="submit" value="Envoyer !"/>
				</li>
			</ul>
			
			
		</form>
		</div>
		<?php include ('footer.php'); ?>
	</body>
</html>