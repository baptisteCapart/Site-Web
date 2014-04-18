<?php 


if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['pwd'])) {
  extract($_POST);
  $pwd = sha1($pwd); 
  include ('models/membremodel.php');
  
  $donnee = verification($login);

  if( $donnee['mot_de_passe'] != $pwd) {
    echo '<p>Mauvais login / password. Merci de recommencer</p>';
    exit;

  }  else {
    $_SESSION['pseudo'] = $login;
    $_SESSION['id'] = $donnee['membre_id'];
    
    echo 'Vous etes bien loggé';

    header ('location: index.php?'.$_GET['redirect']);
  } 


// }else {
//   echo '<p>Vous avez oublié de remplir un champ.</p>';
//   exit;
}

include ('views/banniere.php');

?>