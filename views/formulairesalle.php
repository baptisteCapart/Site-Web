
		<?php include("views/banniere.php"); ?>
<div id="bloc">
		<div id="bienvenue">Remplis gratuitement ce formulaire d'inscription pour devenir gérant de salle et ainsi bénéficier de tous les privilèges d'un gérant de salle !</div>
		<div id="formulaire">
		<form class ="form2" method="post" action="index.php?page=formulairesallecontrolleur">
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
				<div class="type"><span>Type : </span><select class ="textbox" name="type" id="type">
					<option value="salle de spectacle">salle de spectacle</option>
					<option value="bar">bar</option>
					<option value="lieu en extérieur" >lieu en extérieur</option>
				</select></div>
				</li>				
				<li>
					<div class="capacité"><span>Capacité : </span><input class = "textbox" type="text" name="capacité" value=""/></div>			
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
		<?php include ('views/footer.php'); ?>
