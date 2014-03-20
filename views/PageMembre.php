


<?php include("banniere.php"); ?>

<div id= "cover">

</div>
<div id="donnees">	
	<ul id="membre">
		<li>
			<div>
				<img id="image" src="images/membreexp.jpg"  alt="Photo de Gérard" />
			</div>
		</li>
		<li id="donneesmembre">
			<ul>
				<li> <?= $_SESSION['pseudo'] ?> </li>
				<li><?= $donnees['sexe'] ?></li>
				<li>25/10/1990</li>
				<li><?= $donnees['ville'] ?></li>
			</ul>
		</li>

	</ul>
	
</div>
<div id="gerer"><input type="submit" value="paramètres"/></div>
<div id="suivre"><input type="submit" value="Suivre"/></div>
<div id="message"><input type="submit" value="Envoyer un message"/></div>
<div id="menudyna2">
			<ul>
				<li class = "ongletmembre1">Artistes </br>
				<div class="contenumembre">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</div></li>
				<li class = "ongletmembre2">Salles</br>
				<div class="contenumembre">bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</div></li>	
				<li class = "ongletmembre3">Concerts</br>
				<div class="contenumembre">ccccccccccccccccccccccccccccccccc</div></li>	
				<li class = "ongletmembre4">Avis</br>
				<div class="contenumembre">ddddddddddddddddddddddddddddddddddddd</div></li>		
			</ul> 	

		</div>


<?php include("footer.php"); ?>

