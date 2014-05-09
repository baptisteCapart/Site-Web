
<div id="bloc">

		<div id="formulaire">
		<form class ="form2" method="post" action="<?php echo'index.php?page=modifierconcertcontrolleur&id='.$donnees['concert_id']; 
	 ?>">
			<div class = "intro">Si vous n'apportez aucune modification, cliquez simplement sur "Valider" pour que le concert soit crée</div>
			<ul>
				<li>
					<div><span>Nom :</span>
					<input class = "textbox" type="text" name="nom" value="<?= $donnees['nom'] ?>"></div>
				</li>
				<li>
					<div><span>Date :</span>
					<input class = "textbox" type="date" name="jour" value="<?= $donnees['jour'] ?>"></div>
				</li>
				<li>
					<div><span>Heure de début :</span>
					<input class = "textbox" type="time" name="début" value="<?= $donnees['heure'] ?>"></div>
				</li>
				<li>
					<div><span>Durée :</span>
					<input class = "textbox"type="time" name="duree" value="<?= $donnees['duree'] ?>"></div>
				</li>
				<li>
					<div><span>Description :
					<TEXTAREA name="description" rows=10 COLS=40><?=$donnees['description'] ?></TEXTAREA></div>
				</li>
				<li>
					<div><span>Message :
					<TEXTAREA name="message" rows=10 COLS=40></TEXTAREA></div>
				<li>
					<div><span>Photo de couverture :</span>
					<input type="file" name="photocover"></div>
				</li>
			    <div class="fil">
			    	<?php while ($post = $listepost->fetch()) { ?>
						<div class="contenu">
							<?php 
							echo($post['contenu']);
							 ?>
						</div>
			    	<?php } ?>
			    </div>				
				<li><input class = "envoyer" type="submit"></input></li>
			</ul>
			
			
		</form>
		</div>
</div>
