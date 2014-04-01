<?php  
	// mysql_connect("localhost", "root", "");
	// mysql_select_db("mydb");
$bdd = new PDO('mysql:host=localhost;dbname=mydb', 'root', 'root');

// $bdd = new mysqli("localhost", "root", "", "mydb"); 

if (!isset($_SESSION)){
session_start();
}
?>


