<header class="header">
	<div id="logo"><a href="home.php"><img src="images/logo_1.2.png" alt="Tune In Town Society's logo"/></a></div>
	<div><strong class="TIT">Tune In Town</strong></div>
	<div><strong class="slogan">The beat goes around !</strong></div>	

	<?php 
	$loggé = true;
	if($loggé == false){
	?>
		<form class ="form" method="post" action="formulaire.php">
			<span class="login">Pseudo : </span>
			<input type="text" name="pseudo" value=""/>
			<span class="login">Password : </span>
			<input type="password" name="mdp" value=""/>
			<input type="submit" value="Log in"/>
			<span class="sign_in"><a href ="formulaire.php" target="_blank">Inscription</a></span>
		</form>
	<?php
	} else {
	?>
	<div id="pseudo"> 
		<ul>
			<li><a href="#">Pseudo du membre</a></li>
			<li><a href="#">Déconnexion</a></li>
		</ul>
	</div>	

	<?php
	}
	?>
	<nav id="menu">
		<ul>
			<li id = "compte"><a href="#">Compte</a>
				<ul class = "menu1">
					<li id = "profil"><a href="#">Mon compte</a></li>
					<li id = "groupes"><a href="#">Mes artistes</a></li>
					<li id = "rooms"><a href="#">Mes salles</a></li>
					<li id = "shows"><a href="#">Mes concerts</a></li>
				</ul>
			</li>	
			<li id = "artistes"><a href="#">Artistes</a>
				<ul class = "menu2">
					<li id = "alpha"><a href="#">Par ordre alphabétique</a> </li>
					<li id = "style"><a href="#">Par style</a></li>
					<?php if ($loggé == true) { ?>
						<li id = "créer"><a href="#">Créer un profil artiste</a></li>
					<?php } ?>
				</ul>
			</li>	
			<li id = "salles"><a href="#">Salles</a>
				<ul class = "menu3">
					<li id = "alpha"><a href="#">Par ordre alphabétique</a> </li>
					<li id = "lieu"><a href="#">Par lieu</a></li>
				</ul>
			</li>	
			<li id = "concerts"><a href="#">Concerts</a>
				<ul class = "menu4">
					<li id = "date"><a href="#">Par date</a> </li>
					<li id = "lieu"><a href="#">Par lieu</a></li>
				</ul>
			</li>	
			<li id = "forum"><a href="#">Forum</a></li>
			<li id = "search">
				<form class ="recherche" method="post" action="research.php">
					<input type="text" name="recherche" placeholder="Rechercher"/>
				</form>
			</li>
		</ul>
	</nav>
</header>