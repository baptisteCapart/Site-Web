<?php 

require ('../connectbdd.php');
include ('../models/artistemodel.php');

$listegroupe = liste();


include ('../views/listeartistes.php');

 ?>