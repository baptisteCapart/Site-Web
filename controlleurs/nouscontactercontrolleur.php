<?php 

if (isset($_POST['pseudo']) AND isset($_POST['message']))
{
    $pseudo = mysql_real_escape_string(htmlspecialchars($_POST['pseudo'])); 
    $message1 = mysql_real_escape_string(htmlspecialchars($_POST['message']));
    

     $to      = 'v.cordier.isep@gmail.com';
     $subject = 'site app';
     $message1 = 'message';
     $headers = 'From: pseudo';
   	
   	mail($to, $subject, $message1, $headers);
 
}
include("controlleurs/bannierecontrolleur.php");
include("views/nouscontacter.php");
include('views/footer.php');


 ?>