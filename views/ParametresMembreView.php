<div id="bloc">
<div id="bienvenue">Remplis pour 300€ ce formulaire d'inscription pour devenir membre de notre site et ainsi bénéficier de tous les privilèges d'un inscrit ! <br>
Tous les champs sont obligatoires
</div>
<div id="formulaire">
	<form class ="form2" method="post" action="index.php?page=PageMembrecontrolleur">
		<ul>
							
			<li>
				<div class="mail"><span>Adresse mail : </span><input class = "textbox" type="email" name="mail" value="<?= $donnees['mail'] ?>"/></div>

			</li>

			<li>
				<div class="age"><span> Date de naissance: </span><input class = "textbox" type="date" name="age" value="<?= $donnees['date_de_naissance'] ?>"/></div>

			</li>			

			<li>
			<div class="sexe"><span>Sexe : </span><select class ="textbox" name="sexe" id="sexe" value = "<?= $donnees['sexe'] ?>">
				<option value="H">Homme</option>
				<option value="F">Femme</option>
				<option value="?" selected>?</option>
			</select></div>
			</li>
			<li>
				<div class="ville"><span>Ville : </span><input class = "textbox" type="text" name="ville" value="<?= $donnees['ville'] ?>"/></div>

			</li>
			<li>
				<div class="codepostal"><span>Code postal : </span><input class = "textbox" type="text" name="codepostal" value="<?= $donnees['code_postal'] ?>"/></div>

			</li>
			<li>
				<div class="pays"><span>Pays : </span><input class = "textbox" type="text" name="pays" value="<?= $donnees['pays'] ?>"/></div>

			</li>			
			<li>
				<div class="photoprofil"><span>Photo de profil : </span><input class = "textbox" type="file" name="photodeprofil" value = "<?= $donnees['photoprofil'] ?>" /></div>
				<span class = "indications">Si vous choisissez une photo, celle-ci écrasera votre actuelle photo de profil. Si vous ne téléchargez aucune photo, vou conservez votre photo de profil actuelle</span>
			</li>
			<li>
				<div class="photocouv"><span>Photo de couverture :</span><input class = "textbox" type="file" name="photodecover" value = "<?= $donnees['photocover'] ?>"/></div>
				<span class = "indications">Si vous choisissez une photo, celle-ci écrasera votre actuelle photo de couverture. Si vous ne téléchargez aucune photo, vou conservez votre photo de couverture actuelle</span>					
			</li>
				
			<li>
				<input class = "envoyer" type="submit" value="Envoyer !"/>
			</li>

		</ul>


	</form>
</div>
<?php include ('views/footer.php'); ?>
</div>