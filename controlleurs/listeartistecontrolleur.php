<?php 

require ('../connectbdd.php');
include ('../models/artistemodel.php');

$listeartiste = liste();


include ('../views/listeartistes.php');

 ?>