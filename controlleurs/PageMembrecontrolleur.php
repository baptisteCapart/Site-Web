<?php

	include ('models/membremodel.php');

	$donnees = recuperer($_SESSION['id']);

	include ('views/PageMembre.php');

 ?>