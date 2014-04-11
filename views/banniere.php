<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8"/>
	<title>Tune In Town</title>
	<rel type="stylesheet" href="" />
	<link rel="stylesheet" href="views/style/pageMembrestyle.css">
	<link rel="stylesheet" href="views/style/bannierestyle.css"/>
	<link rel="stylesheet" href="views/style/homestyle.css" />
	<link rel="stylesheet" href="views/style/pageartistestyle.css" />
	<link rel="stylesheet" href="views/style/pageconcertstyle.css" />
	<link rel="stylesheet" href="views/style/pageMembrestyle.css">
	<link rel="stylesheet" href="views/style/formulairestyle.css"/>
	<link rel="stylesheet" href="views/style/listeartisteStyle.css"/>
	<link rel="stylesheet" href="views/style/pagesallestyle.css">	
	<link rel="stylesheet" href="views/style/listeartisteStyle.css"/>	
	<link rel="stylesheet" href="views/style/forumstyle.css">
	<link rel="stylesheet" href="views/style/listeSallesStyle.css">	
	<link rel="stylesheet" href="views/style/generaldiscuss.css">

<link href='http://fonts.googleapis.com/css?family=Condiment|Codystar|Poiret+One|Quicksand|Fascinate+Inline|Iceland|Germania+One|Bangers|Open+Sans' rel='stylesheet' type='text/css'>

</head>

<body>
	<header class="header">
		<div id= "cadrelogo">
			<div id="logo"><a href="index.php?page=homecontrolleur"><img src="controlleurs/images/logo_1.2.png" alt="Tune In Town Society's logo"/></a></div>
		</div>

		<div><strong class="slogan">Tune In Town</strong></div>	

		<?php 
		if(!isset($_SESSION['pseudo'])){
			?>
			<div class="container">
				<form class="form" method="post" action="index.php?page=bannierecontrolleur">
					<span class="login">Pseudo : </span>
					<input class ="boite" type="text" name="login" value=""/>
					<span class="login">Password : </span>
					<input class ="boite" type="password" name="pwd" value=""/>
					<input class = "logg" type="submit" value="Log in"/>
					<span class="sign_in"><a href ="index.php?page=formulairecontrolleur" target="_blank">Inscription</a></span>
				</form>
			</div>

		<?php
		} else {
		?>
			<div class="container">
				<div class="pseudo"> 
					<ul>
						<li><a href="index.php?page=PageMembrecontrolleur"> <?= $_SESSION['pseudo'] ?> </a></li>
						<li><a href="index.php?page=deconnexioncontrolleur">Déconnexion</a></li>
					</ul>
				</div>
			</div>

		<?php
		}
		?>
		<nav id="menu">
			<ul>
				<li id = "compte"><a  <?php  if(isset($_SESSION['pseudo'])) { ?> href="index.php?page=PageMembrecontrolleur"  
					<?php }else{ ?> href="index.php?page=formulairecontrolleur" <?php } ?> >Compte</a>
					<ul class = "menu1">
						<?php  if(isset($_SESSION['pseudo'])) { ?>
						<li id = "groupes"><a href="PageMembrecontrolleur.php">Mes artistes</a></li>
						<li id = "rooms"><a href="PageMembrecontrolleur2.php">Mes salles</a></li>
						<li id = "shows"><a href="PageMembrecontrolleur3.php">Mes concerts</a></li>
						<?php } ?>
					</ul>
				</li>	
				<li id = "artistes"><a href="index.php?page=listeartistecontrolleur">Artistes</a>
					<ul class = "menu2">
						<li id = "alpha"><a href="#">Par ordre alphabétique</a> </li>
						<li id = "style"><a href="#">Par style</a></li>
						<?php  if(isset($_SESSION['pseudo'])) { ?>
						<li id = "créer"><a href="index.php?page=formulairegroupecontrolleur">Créer un profil artiste</a></li>
						<?php } ?>
					</ul>
				</li>	
				<li id = "salles"><a href="index.php?page=listeSallescontrolleur">Salles</a>
					<ul class = "menu3">
						<li id = "alpha"><a href="#">Par ordre alphabétique</a> </li>
						<li id = "lieu"><a href="#">Par lieu</a></li>
						<?php if(isset($_SESSION['pseudo'])) { ?>
						<li id = "créer"><a href="index.php?page=formulairesallecontrolleur">Créer un profil salle</a></li>
						<?php } ?>
					</ul>
				</li>	
				<li id = "concerts"><a href="index.php?page=pageconcertcontrolleur">Concerts</a>
					<ul class = "menu4">
						<li id = "date"><a href="#">Par date</a> </li>
						<li id = "lieu"><a href="#">Par lieu</a></li>
					</ul>
				</li>	
				<li id = "forum"><a href="index.php?page=forumcontrolleur">Forum</a></li>
				<li id = "search">
					<form class ="recherche" method="post" action="research.php">
						<input class = "barresearch" type="text" name="recherche" placeholder="   Rechercher" size = "30"/>
					</form>
				</li>
			</ul>
		</nav>
	</header>

