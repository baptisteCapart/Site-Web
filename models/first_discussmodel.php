<?php

include('bannierecontrolleur.php')

include('view/first_dicussview.php');
 
if (isset($_POST['pseudo']) AND isset($_POST['message']))
{
    $pseudo = mysql_real_escape_string(htmlspecialchars($_POST['pseudo'])); // On utilise mysql_real_escape_string et htmlspecialchars par mesure de sécurité
    $message = mysql_real_escape_string(htmlspecialchars($_POST['message'])); // De même pour le message
    $message = nl2br($message); // Pour le message, comme on utilise un textarea, il faut remplacer les Entrées par des <br />
 
    // On peut enfin enregistrer :o)
    mysql_query("INSERT INTO livreor VALUES('', '" . $pseudo . "', '" . $message . "')");
}
 
// --------------- Étape 2 -----------------
// On écrit les liens vers chacune des pages
// -----------------------------------------
 
// On met dans une variable le nombre de messages qu'on veut par page
$nombreDeMessagesParPage = 20; // Essayez de changer ce nombre pour voir :o)
// On récupère le nombre total de messages
$retour = mysql_query('SELECT COUNT(*) AS nb_messages FROM livreor');
$donnees = mysql_fetch_array($retour);
$totalDesMessages = $donnees['nb_messages'];
// On calcule le nombre de pages à créer
$nombreDePages  = ceil($totalDesMessages / $nombreDeMessagesParPage);
// Puis on fait une boucle pour écrire les liens vers chacune des pages
echo 'Page : ';
for ($i = 1 ; $i <= $nombreDePages ; $i++)
{
    echo '<a href="livreor.php?page=' . $i . '">' . $i . '</a> ';
}
?>
 
</p>
 
<?php
 
 
// --------------- Étape 3 ---------------
// Maintenant, on va afficher les messages
// ---------------------------------------
 
if (isset($_GET['page']))
{
        $page = $_GET['page']; // On récupère le numéro de la page indiqué dans l'adresse (livreor.php?page=4)
}
else // La variable n'existe pas, c'est la première fois qu'on charge la page
{
        $page = 1; // On se met sur la page 1 (par défaut)
}
 
// On calcule le numéro du premier message qu'on prend pour le LIMIT de MySQL
$premierMessageAafficher = ($page - 1) * $nombreDeMessagesParPage;
 
$reponse = mysql_query('SELECT * FROM livreor ORDER BY id DESC LIMIT ' . $premierMessageAafficher . ', ' . $nombreDeMessagesParPage);
 
while ($donnees = mysql_fetch_array($reponse))
{
        echo '<p><strong>' . $donnees['pseudo'] . '</strong> a écrit :<br />' . $donnees['message'] . '</p>';
}
 
mysql_close(); // On n'oublie pas de fermer la connexion à MySQL ;o)
?>
 
</body>
</html>