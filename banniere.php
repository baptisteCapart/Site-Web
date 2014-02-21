<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Notre super bannière !</title>
		<link rel="stylesheet" href="bannierestyle.css"/>
	</head>
	
	<body>
		<header class="header">
			<div id="logo"><a href="home"><img src="logo_1.2.png" alt="Tune In Town Society's logo"/></a></div>
			<div><strong class="TIT">TIT</strong></div>
			<form class ="form" method="post" action="sign_in.php">
				<span class="login">Pseudo : </span>
				<input type="text" name="pseudo" value=""/>
				<span class="login">Password : </span>
				<input type="password" name="mdp" value=""/>
				<input type="submit" value="Log in"/>
				<span class="sign_in"><a href ="formulaire d'inscription">Inscription</a></span>
			</form>
			<nav id="menu">
				<ul>
					<li id = "compte"><a href="#">Mon Compte</a></li>
					<li id = "artistes"><a href="#">Artistes</a></li>
					<li id = "salles"><a href="#">Salles</a></li>
					<li id = "concerts"><a href="#">Concerts</a></li>
					<li id = "forum"><a href="#">Forum</a></li>
					<li id = "search">
						<form class ="recherche" method="post" action="research.php">
							<input type="text" name="recherche" value="Rechercher"/>
						</form>
					</li>
					
				</ul>
			</nav>
		</header>
	</body>
</html>