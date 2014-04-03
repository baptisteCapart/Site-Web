<?php 
include ('connectbdd.php');

if (!empty($_GET['page']) && is_file('controlleurs/'.$_GET['page'].'.php'))
{
        include 'controlleurs/'.$_GET['page'].'.php';
}
else
{
        include 'controlleurs/homecontrolleur.php';
} ?>