<?php  

$bdd = new PDO('mysql:host=localhost;dbname=mydb', 'root', 'root');

if (!isset($_SESSION)){
session_start();
}
?>


