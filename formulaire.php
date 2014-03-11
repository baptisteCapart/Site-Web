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
					<div class="pseudo">Pseudo : </div>
					<input class = "textbox" type="text" name="pseudo" value=""/>
				</li>
					<div class="motdepasse">Mot de passe : </div>
					<input class = "textbox"  type="password" name="mdp" value=""/>
				<li>
					<div class="mail">Adresse mail : </div>
					<input class = "textbox" type="text" name="mail" value=""/>
				</li>
				<li>
					<div class="ville"> Ville : </div>
					<input class = "textbox" type="text" name="ville" value=""/>						
				</li>
				<li>
					<div class="codepostal"> Code postal : </div>
					<input class = "textbox" type="text" name="codepostal" value=""/>
				</li>
				<li>
					<div class="photoprofil"> Photo de profil : </div>				
					<input class = "textbox" type="file" name="photo" />					
				</li>
				<li>
					<div class="photocouv"> Photo de couverture : </div>				
					<input class = "textbox" type="file" name="photo" />
				</li>
				<li>
					
				</li>
				<li>
					<input class = "envoyer" type="submit" value="Envoyer !"/>
			</ul>
			
			
		</form>
		</div>
		<?php include ('footer.php'); ?>
	</body>
</html>