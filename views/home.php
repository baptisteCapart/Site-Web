<script>
	caroussel();

</script>

<div id="blochome">
				
				<div id="caroussel" >
					<ul>
						<?php  if(isset($caroussel)){
							foreach ($caroussel as $diapo) {
								if($diapo['typenews']==1){$chemin ='controlleurs/images/concerts/'.$diapo['photocover'].'';}
								else{$chemin ='controlleurs/images/artistes/'.$diapo['photocover'].'';}
							echo ' <li><a href='.$diapo["lien"].'><img src='.$chemin.' alt="" /></a><p class="azerty">
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
										<td>
											<?php  echo ' <a href="index.php?page=pageconcertcontrolleur&id='.$local["concert_id"].'">';?>
											<div id = "tableimg" style="background-image:url(<?php echo 'controlleurs/images/concerts/'.$local['photocover']; ?>); ">
													
												</div></a>
												<div class="invisible">
												<?php $date = new datetime($local['jour']); ?>  
															<?php echo 'Le '. $date->format('d/m/Y') .' à : '.$local['salle_nom'].''; ?>
													</div>
										</td>

						<?php }}} ?>
						</tr>
				</table>
			</div>

			<div id="groupe" >
					<div id="titre3"> LES NEWS DE MES ARTISTES </div>
						<ul>
							<?php  if(isset($newsperso)){
								foreach ($newsperso as $news) {
									// $contenu = $news->fetch();
									//var_dump($news);
									echo ' <li><a href='.$news["lien"].'><img src="controlleurs/images/'.$news['photocover'].'" alt="" /></a><p >
									'.$news['description'].'</p> </li>';
								}
							} ?>
						</ul>
					</div>
			</div>
			<div id="groupe" >
					<div id="titre3"> LES NEWS DE MES SALLES </div>
						<ul>
							<?php  if(isset($newsperso2)){
								foreach ($newsperso2 as $news2) {
									// $contenu = $news2->fetch();
									//var_dump($news2);
									echo ' <li><a href='.$news2["lien"].'><img src="controlleurs/images/'.$news2['photocover'].'" alt="" /></a><p >
									'.$news2['description'].'</p> </li>';
								}
							} ?>
						</ul>
					</div>
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
