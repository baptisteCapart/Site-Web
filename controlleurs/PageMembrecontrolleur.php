<?php

	require ('../connectbdd.php');
	include ('../models/artistemodel.php');

	$donnees = recuperer($_SESSION['id']);

	include ('../views/PageMembre.php');

 ?>