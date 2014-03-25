
<?php include("banniere.php"); ?>

<div id= "cover2" style="background-image:url(<?php echo $donnees['photocover']; ?>); " >
</div>

<div id="donnees2">	
	
		<li id="donneessalle">
			<ul>
				<li><?= $_SESSION['nomsalle'] ?> </li>
				<li><?= $donnees['adresse'] ?></li>
				<li><?= $donnees['horaire'] ?></li>
				<li><?= $donnees['ville'] ?></li>
				<li><?= $donnees['pays'] ?></li>
				<li><?= $donnees['code_postal'] ?></li>
			</ul>
		</li>

	
	
</div>

<div id="global2">
<ul id="parametres">
	<li><input class = "bouton" type="submit" value="Paramètres" /></li>
	<li><input class = "bouton" type="submit" value="Suivre"/></li>
	<li><input class = "bouton" type="submit" value="Envoyer un message"/></li>
</ul>
</div>

<div id="menudyna3">
			<ul>
				<li class = "ongletsalle1">Représentation </br>
				<div class="contenusalle">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</div></li>
				<li class = "ongletsalle2">Calendrier</br>
				<div class="contenusalle">bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</div></li>	
				<li class = "ongletsalle3">Plan</br>
				<div class="contenusalle">ccccccccccccccccccccccccccccccccc</div></li>	
				<li class = "ongletsalle4">Avis</br>
				<div class="contenusalle">ddddddddddddddddddddddddddddddddddddd</div></li>		
			</ul> 	

</div>


<?php include("footer.php"); ?>

