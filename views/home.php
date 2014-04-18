
		<div id="blochome">
		<div id="news">			
				<div id="liste_news">
					<ul>
						<li></li>
						<li><a href="#"> Grand Corps Malade à la Cigale !</a></li>
						<li><a href="#"> Dj Vincent, ou le grand retour</a></li>
						<li><a href="#"> Le Trombinoscope : une nouvelle salle débarque</a></li>
						<li><a href="#"> Stromae dépasse les 1000 abonnés !</a></li>
						<li><a href="#"> Concert d'inauguration de la salle du Triton au Lilas</a></li>
						<li><a href="#"> La salle Pleyel restaurée : les prochains évènements ...</a></li>
					</ul>
				</div>
				<div id= "buttontest">
					<br><br><br><br><br>
					<a href="">NEWS</a>
				</div>
		</div>
		<?php 
		if(isset($_SESSION['pseudo'])){
		?>
		<div id="notifs">
			<div id="proche_vous"> 
				<a href=​"#presse" class=​"fleche">​</a>​
				<div id="titre1"> PROCHE DE CHEZ VOUS ! </div>
				<ul>
					<li class = "proche1"><a href="#" > U2 en concert à Versailles</a>
					<img class = "image" src="controlleurs/images/U2.jpg" alt="u2"></li>
					<li class = "proche2"><a href="#" > Bastian Baker, rendez vous l'Olympia</a>
					<img class = "image" src="controlleurs/images/baker.jpg" alt="u2"></li>
					<li class = "proche3"><a href="#"> Les Rolling Stones en tournée</a>
					<img class = "image" src="controlleurs/images/rolling.jpg" alt="u2"></li>
					<li class = "proche4"><a href="#"> Les Beatles : le retour</a>
					<img class = "image" src="controlleurs/images/beatles.jpg" alt="u2"></li>
					<li class = "proche5"><a href="#"> Le printemps des fleurs : Vivaldi comme jamais </a>
					<img class = "image" src="controlleurs/images/vivaldi.jpg" alt="u2"></li>
				</ul>
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
				<li class = "formulaire">Et bien plus encore ! Il suffit de t'inscrire gratuitement en remplissant <a href="index.php?page=formulairecontrolleur" target="_blank">ce formulaire</a></li>
			</ul>
		</div>

		<?php
		}
		?>
		</div>
