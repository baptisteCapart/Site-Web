<?php 

require ('../connectbdd.php');


if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['pwd'])) {
  extract($_POST);
  // on recupère le password de la table qui correspond au login du visiteur
  $pwd = sha1($pwd); 
  include ('../models/bannieremodel.php');
  
  $donnee = verification($login);

  if( $donnee['mot_de_passe'] != $pwd) {
  echo '<p>Mauvais login / password. Merci de recommencer</p>';
    /*include('login.htm'); // On inclut le formulaire d'identification*/
  exit;


  }  else {
    //session_start();
    $_SESSION['pseudo'] = $login;
    $_SESSION['id'] = $donnee['membre_id'];
    
    echo 'Vous etes bien loggé';
    // ici vous pouvez afficher un lien pour renvoyer
    // vers la page d'accueil de votre espace membres 
    header ('location: ../controlleurs/PageMembrecontrolleur.php');
  } 


}else {
  echo '<p>Vous avez oublié de remplir un champ.</p>';
   //include('login.htm'); // On inclut le formulaire d'identification
   exit;
}

include ('../views/home.php');

?>