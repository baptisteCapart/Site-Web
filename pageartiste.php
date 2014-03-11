<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Page artiste</title>
		<rel type="stylesheet" href="" />
		<link rel="stylesheet" href="bannierestyle.css"/>
		<link rel="stylesheet" href="pageartistestyle.css"/>
	</head>

	<body>
		<?php include("banniere.php"); ?>

			<div id = "photoartiste">
				<div id="nomartiste">
					Stromae
				</div>
			</div>
			<div id="menudyna">
				<ul>
					<li class = "onglet1"><a href="pageartiste.php">Présentation</a></li>
					<li class = "onglet2"><a href="#">Concerts</a></li>	
					<li class = "onglet3"><a href="#">Extraits</a></li>	
					<li class = "onglet4"><a href="#">Avis</a></li>	
					<li class = "onglet5"><a href="#">Photos</a></li>	
				</ul>				
			</div>
			<div id="contenu"></div>
		<?php include("footer.php"); ?>
	</body>
</html>