<?php  
function insert($pseudo, $mdp, $mail ,$codepostal, $ville ,$sexe, $pays,$photodeprofil, $photodecover){
	mysql_query("INSERT INTO membre(pseudo, mot_de_passe, mail, code_postal, ville, sexe, pays, photoprofil, photocover )  VALUES ('$pseudo', '$mdp', '$mail' ,'$codepostal', '$ville' ,'$sexe', '$pays','$photodeprofil', '$photodecover')");
}
?>