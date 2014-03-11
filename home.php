<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Tune In Town</title>
		<rel type="stylesheet" href="" />
		<link rel="stylesheet" href="bannierestyle.css"/>
		<link rel="stylesheet" href="homestyle.css"/>
	</head>

	<body>
		<?php include("banniere.php"); ?>
		<div id="news">
				<div id="liste_news">
					<ul>
						<li></li>
						<li></li>
						<li><a href="#"> Grand Corps Malade à la Cigale !</a></li>
						<li><a href="#"> Dj Vincent, ou le grand retour</a></li>
						<li><a href="#"> Le Trombinoscope : une nouvelle salle débarque</a></li>
						<li><a href="#"> Stromae dépasse les 1000 abonnés !</a></li>
						<li><a href="#"> Concert d'inauguration de la salle du Triton au Lilas</a></li>
						<li><a href="#"> La salle Pleyel restaurée : les prochains évènements ...</a></li>
					</ul>
				</div>
				<div id="flechegauche">
					<a href="newsprecedente"><img src="images/flechegauche.png" alt="news précédente"></a>
				</div>
				<div id="flechedroite">
					<a href="newssuivante"><img src="images/flechedroite.png" alt="news suivante"></a>
				</div>
		</div>
		<?php  
		if($loggé == true){
		?>
		<div id="notifs">
			<div id="proche_vous"> 
				<a href=​"#presse" class=​"fleche">​</a>​
				<div id="titre1"> PROCHE DE CHEZ VOUS ! </div>
				<ul>
					<li><a href="#" class = "proche1"> Concert Soul bar O'Cean</a></li>
					<li><a href="#" class = "proche2"> Musique à Versailles : Marais, Charpentier, ...</a></li>
					<li><a href="#" class = "proche3"> Generation 80-90 : la boum</a></li>
					<li><a href="#" class = "proche4"> American Party (Billboard Hot 100)</a></li>
					<li><a href="#" class = "proche5"> Le printemps des fleurs : Vivladi comme jamais </a></li>
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
								<li><img src="images/membre.jpg" alt="membre logo"></li>
								<li>Tu peux devenir simple membre, et ainsi créer la page de ton groupe de musique !</li>
							</ul>
						</li>
						<li>
							<ul>
								<li><img src="images/membre.jpg" alt=""></li>
								<li>Tu peux aussi représenter une salle de concert et gérer ta propre page !</li>
							</ul>
						</li>
						<li>
							<ul>
								<li><img src="images/monde.jpg" alt="se faire connaitre"></li>
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
								<li><img src="images/follow.jpg" alt="suivre"></li>
								<li>Tu pourras suivre tes artistes et salles préférés !</li>
							</ul>
						</li>
						<li>
							<ul>
								<li><img src="images/portevoix.jpg" alt="écouter chansons"></li>
								<li>Tu pourras écouter les musiques mises en ligne par les artistes !</li>
							</ul>
						</li>
						<li>
							<ul>
								<li><img src="images/message.jpg" alt="interagir"></li>
								<li>Tu pourras intéragir avec d'autres membres !</li>
							</ul>
						</li>
					</ul>
				</li>
				<li class = "formulaire">Et bien plus encore ! Il suffit de t'inscrire gratuitement en remplissant <a href="formulaire.php">ce formulaire</a></li>
			</ul>
		</div>

		<?php
		}
		?>

		<?php include("footer.php"); ?>
		

	</body>
</html>