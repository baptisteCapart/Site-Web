
<div id="bloc">

	<div id="bienvenue">Remplis gratuitement ce formulaire d'inscription pour créer ton groupe et ainsi bénéficier de tous les privilèges d'un groupe !</div>
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
					<div class="description"><span>Description : <TEXTAREA name="description" rows=10 COLS=40 value = "<?=$donnees['description'] ?>"></TEXTAREA></div>			
				</li>				
				<li>
					<div class="photogroupe"><span>Photo du groupe : </span><input class = "textbox" type="file" name="photogroupe" /></div>
				</li>
								

				<li>
					<input class = "envoyer" type="submit" value="Envoyer !"/>
				</li>
			</ul>
			
			
		</form>
	</div>
	</div>

		<?php include ('views/footer.php'); ?>