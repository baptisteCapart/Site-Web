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
					<li>
						<ul>
							<li><a href="pageartiste.php">Présentation</a></li>
							<li><div id="biographie"> bb</div></li>
						</ul>
					</li>

					<li><a href="#">Concerts</a>	
						<div id="listeconcert"></div>
					</li>	
					<li><a href="#">Extraits</a>
						<div id="musiques"></div>
					</li>	
					<li><a href="#">Avis</a>
						<div id="avis"></div>
					</li>	
					<li><a href="#">Photos</a>
						<div id="photos"></div>
					</li>	
				</ul>
				
			</div>
		<?php include("footer.php"); ?>
	</body>
</html>