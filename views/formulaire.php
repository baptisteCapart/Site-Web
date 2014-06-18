
<div id="bloc">
<div id="bienvenue">Remplis ce formulaire d'inscription pour devenir membre de notre site et ainsi bénéficier de tous les privilèges d'un inscrit ! <br>
<span class="precision">Tous les champs sont obligatoires sauf pour les photos. Si tu ne télécharges pas de photos, tes photos de profil et couverture seront les photos par défaut. <span class = "imp">Les photos ne doivent pas excéder 1Mo </span>ou elles ne seront pas pris en compte.</span> 
</div>
<div class="erreur"><?php echo($error); ?></div>
<div id="formulaire">
	<form enctype = "multipart/form-data" class ="form2" onsubmit = "return grosseVerif()"  name = "formIn" method="post" action="index.php?page=formulairecontrolleur">
		<ul>
			<li>
				<div class="pseudo2"><span>Pseudo : </span><input onblur = "return verifPseudo()" class = "textbox" type="text" name="pseudo" /> </div>

			</li>
			<li>
				<div class="motdepasse"><span>Mot de passe : </span><input onblur = "return pwdComplex()" class = "textbox"  type="password" name="mdp" value=""/></div>
			</li>	
			<li>
				<div class="motdepasse2"><span>Confirmation du mot de passe : </span><input onblur = "return verifmdp()" class = "textbox"  type="password" name="mdp2" value=""/></div>
			</li>				
			<li>
				<div class="mail"><span>Adresse mail : </span><input class = "textbox" type="email" name="mail" /></div>

			</li>

			<li>
				<div class="age"><span> Date de naissance: </span><input class = "textbox" type="date" name="age" /></div>

			</li>			

			<li>
			<div class="sexe"><span>Sexe : </span><select class ="textbox" name="sexe" id="sexe">
				<option value="H">Homme</option>
				<option value="F">Femme</option>
				<option value="?" selected>?</option>
			</select></div>
			</li>
			<li>
				<div class="ville"><span>Ville : </span><input class = "textbox" type="text" name="ville" /></div>

			</li>
			<li>
				<div class="codepostal"><span>Code postal : </span><input onblur = "return code()" class = "textbox" type="text" name="codepostal" /></div>

			</li>
			<li>
				<div class="pays"><span>Pays : </span><input class = "textbox" type="text" name="pays" /></div>

			</li>	

			<li>
				<div class="photoprofil"><span>Photo de profil : </span><input  class = "textbox" type="file" name="photodeprofil" /></div>
			</li>
			<li>
				<div class="photocouv"><span>Photo de couverture :</span><input   class = "textbox" type="file" name="photodecover" /></div>					
			</li>

			<li>
				<div class="conditions"><input  class = "textbox" type="checkbox" name="conditions" required value=""/><span>J'accepte les <a class = "cgu" target = "blank" href="index.php?page=charteForumcontrolleur">conditions d'utilisation</a> </span></div>
			</li>				
			<li>
				<input class = "envoyer" type="submit" value="Envoyer !"/>
			</li>

		</ul>


	</form>
</div>