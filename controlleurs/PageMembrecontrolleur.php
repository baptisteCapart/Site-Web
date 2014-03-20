<?php

	require ('../connectbdd.php');
	include ('../models/bannieremodel.php');

	$donnees = recuperer($_SESSION['id']);

	include ('../views/PageMembre.php');

 ?>