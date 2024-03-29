<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8"/>
	<title>Tune In Town Local</title>
	<link rel="shortcut icon" type="image/x-icon" href="controlleurs/images/logo_1.2.png" />
	<rel type="stylesheet" href="" />
	<link rel="stylesheet" href="views/style/nouscontacterstyle.css" />
	<link rel="stylesheet" href="views/style/FAQstyle.css" />
	<link rel="stylesheet" href="views/style/charteForumstyle.css" />
	<link rel="stylesheet" href="views/style/pageMembrestyle.css">
	<link rel="stylesheet" href="views/style/bannierestyle.css"/>
	<link rel="stylesheet" href="views/style/homestyle.css" />
	<link rel="stylesheet" href="views/style/pageconcertstyle.css" />
	<link rel="stylesheet" href="views/style/pageMembrestyle.css">
	<link rel="stylesheet" href="views/style/formulairestyle.css"/>
	<link rel="stylesheet" href="views/style/listeartisteStyle.css"/>
	<link rel="stylesheet" href="views/style/pagesallestyle.css">	
	<link rel="stylesheet" href="views/style/listeartisteStyle.css"/>	
	<link rel="stylesheet" href="views/style/forumstyle.css">
	<link rel="stylesheet" href="views/style/listeSallesStyle.css">	
	<link rel="stylesheet" href="views/style/liste_topicstyle.css">
	<link rel="stylesheet" href="views/style/pageartistestyle.css" />
	<link rel="stylesheet" href="views/style/discuss_style.css">
	<link rel="stylesheet" href="views/style/wrong_topicstyle.css">
	<link rel="stylesheet" href="views/style/new_topicstyle.css">
	<link rel="stylesheet" href="views/style/listeConcertsstyle.css">	
	<link rel="stylesheet" href="views/style/ParametresMembreStyle.css">
	<link rel="stylesheet" href="views/style/register_complete_style.css">
	<link rel="stylesheet" href="views/style/recherchestyle.css">
	<link href='http://fonts.googleapis.com/css?family=Condiment|Codystar|Poiret+One|Quicksand|Fascinate+Inline|Iceland|Germania+One|Bangers|Open+Sans' rel='stylesheet' type='text/css'>
	<script src="jquery-2.1.1.min.js"></script>
	<script type = "text/javascript" src = "script.js"></script>

</head>

<body>
	<header class="header">
		<div id= "cadrelogo">
			<div id="logo"><a href="index.php?page=homecontrolleur"><img src="controlleurs/images/logo_1.2.png" alt="Tune In Town Society's logo"/></a></div>
		</div>

		<div><strong class="slogan">Tune In Town</strong></div>	

		<?php 
		if(!isset($_SESSION['pseudo'])){
			$redirect = $_SERVER["QUERY_STRING"];
			?>
			<div class="container">
				<form name = "formCo" class="form" method="post" onsubmit = "return verif()" action="index.php?page=bannierecontrolleur&redirect=<?php echo "$redirect"; ?>">
					<span class="login">Pseudo : </span>
					<input class ="boite"  type="text" name="login" value=""/>
					<span class="login">Password : </span>
					<input class ="boitepwd" type="password"  name="pwd" value=""/>
					<input class = "logg" type="submit" value="Log in"/>
					<span class="sign_in"><a href ="index.php?page=formulairecontrolleur" >Inscription</a></span>
				</form>
			</div>

		<?php
		} else {
		?>
			<div class="container">
				<div class="pseudo"> 
					<ul>
						<li><?php echo '<a href="index.php?page=PageMembrecontrolleur&id='.$_SESSION["id"].'">'; ?> <?= $_SESSION['pseudo'] ?> </a></li>
						<li><a href="index.php?page=deconnexioncontrolleur">Déconnexion</a></li>
					</ul>
				</div>
			</div>

		<?php
		}
		?>
		<nav id="menu">
			<ul>
				<li id = "compte"><a  <?php  if(isset($_SESSION['pseudo'])) { ?> <?php echo ' href="index.php?page=PageMembrecontrolleur&id='.$_SESSION["id"].'"'; ?>  
					<?php }else{ ?> href="index.php?page=formulairecontrolleur" <?php } ?> >Compte</a>
					<ul class = "menu1">
						<?php  if(isset($_SESSION['pseudo'])) { ?>
						<li id = "groupes"><a href="index.php?page=PageMembrecontrolleur&id=<?php echo $_SESSION["id"];?>&ongletMembre=1#menuMembre">Mes artistes</a></li>
						<li id = "rooms"><a href="index.php?page=PageMembrecontrolleur&id=<?php echo $_SESSION["id"];?>&ongletMembre=2#menuMembre">Mes salles</a></li>
						<li id = "shows"><a href="index.php?page=PageMembrecontrolleur&id=<?php echo $_SESSION["id"];?>&ongletMembre=3#menuMembre">Mes concerts</a></li>
						<?php } ?>
					</ul>
				</li>	
				<li id = "artistes"><a href="index.php?page=listeartistecontrolleur">Artistes</a>
					<ul class = "menu2">
						<li id = "alpha"><a href="index.php?page=listeartistecontrolleur&critere=1">Par ordre alphabétique</a> </li>
						<li id = "style"><a href="index.php?page=listeartistecontrolleur&critere=2">Par style</a></li>
						<li id = "style"><a href="index.php?page=listeartistecontrolleur&critere=3">Par note</a></li>
						<?php  if(isset($_SESSION['pseudo'])) { 
						 if(isset($_SESSION['pseudo'])) {
							if ($verifArtiste ==false) { ?>
							<li><?php echo'<a href = "index.php?page=pageartistecontrolleur&id='.$Artiste["artiste_id"].'">Mon profil artiste</a>'; ?></li>
						<?php }else{ ?>
						<li id = "créer"><a href="index.php?page=formulairegroupecontrolleur">Créer un profil artiste</a></li>
					<?php }}} ?>
					</ul>
				</li>	
				<li id = "salles"><a href="index.php?page=listeSallescontrolleur&critereSalle=1">Salles</a>
					<ul class = "menu3">
						<li id = "alpha"><a href="index.php?page=listeSallescontrolleur&critereSalle=1">Par ordre alphabétique</a> </li>
						<li id = "lieu"><a href="index.php?page=listeSallescontrolleur&critereSalle=2">Par lieu</a></li>
						<li id = "lieu"><a href="index.php?page=listeSallescontrolleur&critereSalle=3">Par note</a></li>
						<?php if(isset($_SESSION['pseudo'])) { 
							if(isset($_SESSION['pseudo'])) { 
							 if ($verifSalle ==false) { ?>
							<li><?php echo'<a href = "index.php?page=pageSallecontrolleur&id='.$Salle["salle_id"].'">Mon profil salle</a>'; ?></li>
						<?php }else{ ?>
						<li id = "créer"><a href="index.php?page=formulairesallecontrolleur">Créer un profil salle</a></li>

					<?php }}} ?>						
					</ul>
				</li>	
				<li id = "concerts"><a href="index.php?page=listeConcertscontrolleur&critereConcert=1">Concerts</a>
					<ul class = "menu4">
						<li id = "date"><a href="index.php?page=listeConcertscontrolleur&critereConcert=1">Par date</a> </li>
						<li id = "lieu"><a href="index.php?page=listeConcertscontrolleur&critereConcert=2">Par lieu</a></li>
					</ul>
				</li>	
				<li id = "forum"><a href="index.php?page=forumcontrolleur">Forum</a></li>
				<li id = "search">

					<form class ="recherche" method="post" action="index.php?page=recherchecontrolleur" >

						<input method = "submit" class = "barresearch" type="text" name="recherche" placeholder="Rechercher" size = "30" <?php if(isset($recherche)){ echo 'value="'.$recherche.'"'; } ?>/>
					</form>
				</li>
			</ul>
		</nav>
	</header>

