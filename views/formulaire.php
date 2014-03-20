
<?php include("banniere.php"); ?>
<div id="bloc">
<div id="bienvenue">Remplis pour 300€ ce formulaire d'inscription pour devenir membre de notre site et ainsi bénéficier de tous les privilèges d'un inscrit !</div>
<div id="formulaire">
	<form class ="form2" method="post" action="../controlleurs/formulairecontrolleur.php">
		<ul>
			<li>
				<div class="pseudo2"><span>Pseudo : </span><input class = "textbox" type="text" name="pseudo" value=""/> </div>

			</li>
			<li>
				<div class="motdepasse"><span>Mot de passe : </span><input class = "textbox"  type="password" name="mdp" value=""/></div>
			</li>	
			<li>
				<div class="motdepasse2"><span>Confirmation du mot de passe : </span><input class = "textbox"  type="password" name="mdp2" value=""/></div>
			</li>				
			<li>
				<div class="mail"><span>Adresse mail : </span><input class = "textbox" type="text" name="mail" value=""/></div>

			</li>

			<li>
			<div class="sexe"><span>Sexe : </span><input class = "textbox" type="text" name="sexe" value=""/></div>
			</li>
			<li>
				<div class="ville"><span>Ville : </span><input class = "textbox" type="text" name="ville" value=""/></div>

			</li>
			<li>
				<div class="codepostal"><span>Code postal : </span><input class = "textbox" type="text" name="codepostal" value=""/></div>

			</li>
			<li>
				<div class="pays"><span>Pays : </span><input class = "textbox" type="text" name="pays" value=""/></div>

			</li>			
			<li>
				<div class="photoprofil"><span>Photo de profil : </span><input class = "textbox" type="file" name="photodeprofil" /></div>
			</li>
			<li>
				<div class="photocouv"><span>Photo de couverture :</span><input class = "textbox" type="file" name="photodecover" /></div>					
			</li>

			<li>
				<div class="conditions"><input class = "textbox" type="checkbox" name="conditions" value=""/><span>J'accepte les conditions d'utilisations </span></div>
			</li>				
			<li>
				<input class = "envoyer" type="submit" value="Envoyer !"/>
			</li>

		</ul>


	</form>
</div>
<?php include ('footer.php'); ?>
</div>