
		<?php include("banniere.php"); ?>
<div id="bloc">
		<div id="bienvenue">Remplis gratuitement ce formulaire d'inscription pour devenir gérant de salle et ainsi bénéficier de tous les privilèges d'un gérant de salle !</div>
		<div id="formulaire">
		<form class ="form2" method="post" action="envoiformulaire.php">
			<ul>
				<li>
					<div class="nom_de_salle"><span>Nom de la salle : </span><input class = "textbox" type="text" name="Nom_de_salle" value=""/></div>
					
				</li>
				<li>
					<div class="code_postal"><span>Code Postal : </span><input class = "textbox" type="text" name="code_postal" value=""/></div>			
				</li>
				<li>
					<div class="ville"><span>Ville : </span><input class = "textbox" type="text" name="ville" value=""/></div>		
				</li>
				<li>
					<div class="adresse"><span>Adresse : </span><input class = "textbox" type="text" name="adresse" value=""/></div>			
				</li>
				<li>
					<div class="capacité"><span>Capacité : </span><input class = "textbox" type="text" name="Capacité" value=""/></div>			
				</li>
				<li>
					<div class="photosalle"><span>Photo de la salle : </span><input class = "textbox" type="file" name="photosalle" /></div>
				</li>
				<li>
					<input class = "envoyer" type="submit" value="Envoyer !"/>
				</li>
			</ul>
			
			
		</form>
		</div>
	</div>	
		<?php include ('footer.php'); ?>
