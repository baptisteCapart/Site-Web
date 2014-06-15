<?php 

if (isset($_POST['pseudo']) AND isset($_POST['message']))
{
    $pseudo = htmlspecialchars($_POST['pseudo']); 
    $message1 = htmlspecialchars($_POST['message']);
    

     $to = 'benoitguyot9@gmail.com';
     $subject = 'question pour le modérateur';
     $headers = "From: $pseudo";
   	
   	mail($to, $subject, $message1, $headers);
 
}
include("controlleurs/bannierecontrolleur.php");
include("views/nouscontacter.php");
include('views/footer.php');


 ?>