<?php 

require ('../connectbdd.php');

include ('../models/artistemodel.php');
$donnees = recuperer2();
include ('../views/pageartiste.php');

 ?>