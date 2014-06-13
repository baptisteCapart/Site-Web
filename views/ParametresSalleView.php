<div id="bloc">
		<div id="bienvenue">Tu peux modifier ici tes paramètres</div>
		<div id="formulaire">
		<form class ="form2" name = "formS" onsubmit = "return checkExtS();" enctype = "multipart/form-data" method="post" action="index.php?page=pageSallecontrolleur<?='&id='.$_SESSION['salleID'].''?>">
			<ul>
				<li>
					<div class="nom_de_salle"><span>Nom de la salle : </span><input class = "textbox" type="text" name="Nom_de_salle" value="<?= $donnees['nom'] ?>"/></div>
					
				</li>
				<li>
					<div class="code_postal"><span>Code Postal : </span><input class = "textbox" type="text" name="code_postal" value="<?= $donnees['code_postal'] ?>"/></div>			
				</li>
				<li>
					<div class="ville"><span>Ville : </span><input class = "textbox" type="text" name="ville" value="<?= $donnees['ville'] ?>"/></div>		
				</li>

				<li>
					<div class="adresse"><span>Adresse : </span><input class = "textbox" type="text" name="adresse" value="<?= $donnees['adresse'] ?>"/></div>			
				</li>
				<li>
					<div class="telephone"><span>Telephone : </span><input class = "textbox" type="text" name="telephone" value="<?= $donnees['telephone'] ?>"/></div>			
				</li>				
				<li>
				<div class="type"><span>Type : </span><select class ="textbox" name="type" id="type" value = "<?= $donnees['type'] ?>">
					<option value="salle de spectacle">salle de spectacle</option>
					<option value="bar">bar</option>
					<option value="lieu en extérieur" >lieu en extérieur</option>
				</select></div>
				</li>				
				<li>
					<div class="capacité"><span>Capacité : </span><input class = "textbox" type="text" name="capacité" value="<?= $donnees['capacite'] ?>"/></div>			
				</li>
				<li>
					<div class="photosalle"><span>Photo de la salle : </span><input class = "textbox" type="file" name="photosalle" value = "<?= $donnees['photocover'] ?>" /></div>
					<span class = "indications">Si vous choisissez une photo, celle-ci écrasera votre actuelle photo de profil. Si vous ne téléchargez aucune photo, vou conservez votre photo de profil actuelle</span>
				</li>
				<li>
					<input class = "envoyer" type="submit" value="Envoyer !"/>
				</li>
			</ul>
			
			
		</form>
		</div>
	</div>	