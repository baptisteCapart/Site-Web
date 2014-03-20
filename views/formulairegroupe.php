
		<?php include("banniere.php"); ?>
<div id="bloc">

		<div id="bienvenue">Remplis gratuitement ce formulaire d'inscription pour créer ton groupe et ainsi bénéficier de tous les privilèges d'un groupe !</div>
		<div id="formulaire">
		<form class ="form2" method="post" action="envoiformulaire.php">
			<ul>
				<li>
					<div class="nom_de_salle"><span>Nom du groupe : </span><input class = "textbox" type="text" name="Nom_de_salle" value=""/></div>
					
				</li>
				<li>
					<div class="ville"><span>Ville : </span><input class = "textbox" type="text" name="ville" value=""/></div>		
				</li>
				<li>
					<div class="tag"><span>Tag : </span><input class = "textbox" type="text" name="tag" value=""/></div>		
				</li>
				<li>
					<div class="style"><span>Style de musique : </span><input class = "textbox" type="text" name="Style" value=""/></div>			
				</li>
				<li>
					<div class="photogroupe"><span>Photo du groupe : </span><input class = "textbox" type="file" name="photogroupe" /></div>
				</li>
				<li>
					<div class="logo"><span>Logo : </span><input class = "textbox" type="file" name="logo" /></div>
				</li>
				<li>
					<input class = "envoyer" type="submit" value="Envoyer !"/>
				</li>
			</ul>
			
			
		</form>
		</div>
		</div>

		<?php include ('footer.php'); ?>