<?php 

function verification($login){
	$sql = ("SELECT membre_id, mot_de_passe from membre where pseudo ='$login'");
 	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
 	
  	$donnee = mysql_fetch_assoc($req);
  	return $donnee;
}

function insert($pseudo, $mdp, $mail ,$codepostal, $ville ,$sexe, $pays,$photodeprofil, $photodecover){
	mysql_query("INSERT INTO membre(pseudo, mot_de_passe, mail, code_postal, ville, sexe, pays, photoprofil, photocover )  VALUES ('$pseudo', '$mdp', '$mail' ,'$codepostal', '$ville' ,'$sexe', '$pays','$photodeprofil', '$photodecover')");
}



function recuperer($id){
	$sql = ("SELECT * from membre where membre_id ='$id'");
 	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
 	
  	$donnee = mysql_fetch_assoc($req);
  	return $donnee;
}
 ?>



<!--  <?php 
$bdd = new PDO('mysql:host=localhost; dbname=mydb', 'root', '') ?>

$result= $bdd->query('INSERT');


while($data = ^reponse->fetch()){

}

$result->closeCursor(); -->


