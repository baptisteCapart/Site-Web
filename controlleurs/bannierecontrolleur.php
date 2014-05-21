<?php 

include_once('models/artistemodel.php');
include_once('models/sallemodel.php');

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
    

    header ('location: index.php?'.$_GET['redirect']);
  } 


// }else {
//   echo '<p>Vous avez oublié de remplir un champ.</p>';
//   exit;
}
if(isset($_SESSION['id'])){
  $verifArtiste = PossedeArtiste($_SESSION['id']);
  $verifSalle = PossedeSalle($_SESSION['id']);

    if($verifArtiste == false){
      $Artiste=MaPageArtiste($_SESSION['id']);
      $_SESSION['artiste_id'] = $Artiste;
    }
    if($verifSalle == false){
      $Salle=MaPageSalle($_SESSION['id']);
      $_SESSION['salle_id'] = $Salle;
    }    
}
include ('views/banniere.php');

?>