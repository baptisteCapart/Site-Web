
<?php include("views/banniere.php"); ?>

<div id= "cover" style="background-image:url(<?php echo 'controlleurs/images/'.$donnees['photocover']; ?>); " >
</div>

<div id="donnees">	
	<ul id="membre">
		<li>
			<div>
				<img id="image" src=<?= '"controlleurs/images/'.$donnees['photoprofil'].'"' ?> alt="Photo de Gérard" />
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
				<li  style = "background-color : black"> <a style = "color : white" href="index.php?page=pageMembrecontrolleur">Artistes</a> </br>
				</li>
				<li> <a href="index.php?page=pageMembrecontrolleur2">Salles</a> </br>
				<li> <a href="index.php?page=pageMembrecontrolleur3">Concerts</a> </br>
				<li> <a href="index.php?page=pageMembrecontrolleur4">Avis</a> </br>
			</ul> 	

</div>
<div class="contenumembre"> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</div>

<?php include("views/footer.php"); ?>

