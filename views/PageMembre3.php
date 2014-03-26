
<?php include("banniere.php"); ?>

<div id= "cover" style="background-image:url(<?php echo $donnees['photocover']; ?>); " >
</div>

<div id="donnees">	
	<ul id="membre">
		<li>
			<div>
				<img id="image" src=<?= '"'.$donnees['photoprofil'].'"' ?> alt="Photo de Gérard" />
			</div>
		</li>
		<li id="donneesmembre">
			<ul>
				<li><?= $_SESSION['pseudo'] ?> </li>
				<li><?= $donnees['sexe'] ?></li>
				<li><?= $donnees['date_de_naissance'] ?></li>
				<li><?= $donnees['ville'] ?></li>
				<li><?= $donnees['pays'] ?></li>
				<li><?= $donnees['code_postal'] ?></li>
			</ul>
		</li>

	</ul>
	
</div>

<div id="global">
<ul id="parametres">
	<li><input class = "bouton" type="submit" value="Paramètres" /></li>
	<li><input class = "bouton" type="submit" value="Suivre"/></li>
	<li><input class = "bouton" type="submit" value="Envoyer un message"/></li>
</ul>
</div>

<div id="menudyna2">
			<ul>
				<li > <a href="../controlleurs/pageMembrecontrolleur.php">Artistes</a> </br>
				</li>
				<li> <a href="../controlleurs/pageMembrecontrolleur2.php">Salles</a> </br>
				<li style = "background-color : black"> <a style = "color : white"  href="../controlleurs/pageMembrecontrolleur3.php">Concerts</a> </br>
				<li> <a href="../controlleurs/pageMembrecontrolleur4.php">Avis</a> </br>
			</ul> 	

		</div>
		<div class="contenumembre3"> ccccccccccccccccccccccccc</div>

<?php include("footer.php"); ?>

