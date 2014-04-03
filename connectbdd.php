<?php  

$bdd = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');


if (!isset($_SESSION)){
session_start();
}
?>


