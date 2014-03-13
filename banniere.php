<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Tune In Town</title>
		<rel type="stylesheet" href="" />
		<link rel="stylesheet" href="bannierestyle.css"/>
		<link rel="stylesheet" href="homestyle.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Codystar|Open+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans|Iceland' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Condiment|Iceland' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Fascinate+Inline|Iceland|Germania+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Fascinate+Inline|Iceland|Germania+One|Bangers' rel='stylesheet' type='text/css'>
	</head>

	<body>
<header class="header">
	<div id= "cadrelogo">
		<div id="logo"><a href="home.php"><img src="images/logo_1.2.png" alt="Tune In Town Society's logo"/></a></div>
			<div><strong class="TIT">Tune In Town</strong></div>
	</div>

	<div><strong class="slogan">The beat goes around !</strong></div>	


	<?php 
	$loggé = false;
	if($loggé == false){
	?>
	<div class="container">
 		<form class="form" method="post" action="formulaire.php">
			<span class="login">Pseudo : </span>
			<input type="text" name="pseudo" value=""/>
			<span class="login">Password : </span>
			<input type="pas	sword" name="mdp" value=""/>
			<input type="submit" value="Log in"/>
			<span class="sign_in"><a href ="formulaire.php" target="_blank">Inscription</a></span>
		</form>
	</div>

	<?php
	} else {
	?>
	<div class="pseudo"> 
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