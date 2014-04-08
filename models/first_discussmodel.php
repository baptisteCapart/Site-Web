<?php
include('view/first_dicussview.php');

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$nbmessage

$reponse = $bdd->query('SELECT pseudo, message FROM forum_discussion ORDER BY ID DESC LIMIT 0, 10');

if ($reponse!= FALSE)
{
for ($cle = 0; $cle <= 10; $cle++)
{
    $donnees = $reponse->fetch();
    echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}
}
?>
    </body>
</html>