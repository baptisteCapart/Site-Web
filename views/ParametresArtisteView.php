
<div id="bloc">

	<div id="bienvenue">Tu peux modifier ici tes paramètres</div>
	<div id="formulaire">
		<form class ="form2" method="post" action=" index.php?page=pageartistecontrolleur<?='&id='.$_SESSION['artisteID'].''?>">
			<ul>
				<li>
					<div class="nom_de_salle"><span>Nom du groupe : </span><input class = "textbox" type="text" name="nomartiste" value="<?= $donnees['nom'] ?>" /></div>
					
				</li>

				<li>
					<div class="style"><span>Style de musique : </span><input class = "textbox" type="text" name="style" value=""/></div>			
				</li>
				<li>
					<div class="description"><span>Description : <TEXTAREA name="description" rows=10 COLS=40 ><?=$donnees['description'] ?></TEXTAREA></div>			
				</li>				
				<li>
					<div class="photogroupe"><span>Photo du groupe : </span><input class = "textbox" type="file" name="photogroupe" /></div>
					<span class = "indications">Si vous choisissez une photo, celle-ci écrasera votre actuelle photo de profil. Si vous ne téléchargez aucune photo, vou conservez votre photo de profil actuelle</span>
				</li>
								

				<li>
					<input class = "envoyer" type="submit" value="Envoyer !"/>
				</li>
			</ul>
			
			
		</form>
	</div>
</div>