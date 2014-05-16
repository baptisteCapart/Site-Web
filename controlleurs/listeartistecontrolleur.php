<?php 

include ('models/artistemodel.php');

// $notes = classement();

$critere =1;

if(isset($_GET['critere'])){

	if ($_GET["critere"] ==1){
		$critere=1;
	}	
	if ($_GET["critere"] ==2){
		$critere=2;
	}
	if ($_GET["critere"] ==3){
		$critere=3;
	}
}

if(isset($_GET['lettre'])){
	$lettre = $_GET['lettre'];
}
else
{
	$lettre = 'a';
}
$LISTE = affichage($lettre);


// $requete = trialpha();

// $lettre_tampon = -1; 

// //En bcle sur les resultats 
// foreach ($requete as $res) {
 
// 	$lettre_tester= substr($res['nom'], 0, 1); 

// 	//lettre precedente differente de la lettre suivante 
// 	if ($lettre_tester!= $lettre_tampon) 
// 	{ 
// 	// echo 'appliquer separation 
// 	// afficher ligne ';
// 		// echo "$lettre_tester";
// 		$LISTE = affichage($lettre_tester);
// 		$lettre_tampon= $lettre_tester; 
		

// 	// Sauvegarde de la nouvelle lettre 

// 	} else{ 
// 			echo "fdfdfdf";


// 		$LISTE = affichage($lettre_tampon);
// 		// foreach ($LISTE as $key) {
// 		// 	echo '$key.['nom'].';
// 		// }

// 	}

		
// 		$indice = $lettre_tester;
// }



include('controlleurs/bannierecontrolleur.php');
include ('views/listeartistes.php');
include('views/footer.php');
 ?>