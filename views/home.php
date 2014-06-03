<script>
	caroussel();

</script>

<div id="blochome">
				
				<div id="caroussel" >
					<ul>
						<?php  if(isset($caroussel)){
							foreach ($caroussel as $diapo) {
							echo ' <li><a href='.$diapo["lien"].'><img src="controlleurs/images/'.$diapo['photocover'].'" alt="" /></a><p class="azerty">
							'.$diapo['description'].'</p> </li>';

						}} ?>
					</ul>
				</div>

		<?php 
		if(isset($_SESSION['pseudo'])){
		?>
		<div id="notifs">
			<div id="proche_vous"> 
				<div id="titre1"> PROCHE DE CHEZ VOUS ! </div>
				<table class="image">
					<tr>
						<?php  
							if(isset($localnews)){
								foreach ($localnews as $local) {
									if($local['cp']==$code){ ?>
										<td><div id = "tableimg" style="background-image:url(<?php echo 'controlleurs/images/'.$local['photocover']; ?>); ">
										<div class="cadre"><div class="invisible"> <?php  echo ' <a href="index.php?page=pageconcertcontrolleur&id='.$local["concert_id"].'">
										'.$local['nom'].'</a> 
										Le '.$local['jour'].' à : '.$local['salle_nom'].''; ?></div></div>
										</td>

						<?php }}} ?>
						</tr>
				</table>
			</div>

			<div id="groupe"> 
				<div id="titre2"> LES NEWS DE MES GROUPES </div>
				<ul>
					<li><a href="#"> Concert Soul bar O'Cean</a></li>
					<li><a href="#"> Concert DJ Vincent, Paris</a></li>
					<li><a href="#"> Urban Clash, édition 2014</a></li>
					<li><a href="#"> U2 first Tour</a></li>
					<li><a href="#"> Damian Marley au Casino Royal</a></li>
				</ul>
			</div>

			<div id="salle"> 
				<div id="titre3"> LES NEWS DE MES SALLES </div>
				<ul>
					<li><a href="#"> Concert Soul bar O'Cean</a></li>
					<li><a href="#"> Concert DJ Vincent, Paris</a></li>
					<li><a href="#"> Salle Gaveau : Jean-François Zygel joue avec Beethoven</a></li>
					<li><a href="#"> U2 first tour </a></li>
					<li><a href="#"> Damian Marley au Casino Royal</a></li>
				</ul>
			</div>


		</div>
		<?php 
		}else{
		?>

		<div id="inscristoi"> Inscris-toi !</div>
		<div id="pub">
			<ul>
				<li>
					<ul class = "typeinscrits">
						<div id="qui">Pour qui est le site ?</div>
						<li>
							<ul>
								<li><img src="controlleurs/images/membre.jpg" alt="membre logo"></li>
								<li>N'importe quelle personne qui aime la musique !</li>
							</ul>
						</li>
						<li>
							<ul>
								<li><img src="controlleurs/images/groupesalle.jpg" alt=""></li>
								<li>En t'inscrivant tu pourras représenter une salle de concert ou un groupe de musique et gérer ta propre page !</li>
							</ul>
						</li>
						<li>
							<ul>
								<li><img src="controlleurs/images/monde.jpg" alt="se faire connaitre"></li>
								<li>Dans les deux cas Tune in Town est une excellente manière de te faire connaître ou de découvrir des artistes !</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<ul class = "privileges">
						<div id="quoi">Qu'est ce que tu y gagnes ?</div>
						<li>
							<ul>
								<li><img src="controlleurs/images/follow.jpg" alt="suivre"></li>
								<li>Tu pourras suivre tes artistes et salles préférés !</li>
							</ul>
						</li>
						<li>
							<ul>
								<li><img src="controlleurs/images/portevoix.jpg" alt="écouter chansons"></li>
								<li>Tu pourras écouter les musiques mises en ligne par les artistes !</li>
							</ul>
						</li>
						<li>
							<ul>
								<li><img src="controlleurs/images/message.jpg" alt="interagir"></li>
								<li>Tu pourras intéragir avec d'autres membres !</li>
							</ul>
						</li>
					</ul>
				</li>
				<li class = "formulaire">Et bien plus encore ! Il suffit de t'inscrire gratuitement en remplissant <a href="index.php?page=formulairecontrolleur" >ce formulaire</a></li>
			</ul>
		</div>

		<?php
		}
		?>
</div>
