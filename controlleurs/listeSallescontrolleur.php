<?php 

include ('models/sallemodel.php');
include ('models/trimodel.php');


$critereSalle =1;

if(isset($_GET['critereSalle'])){

	if ($_GET["critereSalle"] ==1){
		$critereSalle=1;
		$listealpha = trialpha("salle");
	
	}	
	if ($_GET["critereSalle"] ==2){
		$critereSalle=2;
		$listeLieu = triLieu("salle");
	}
	if ($_GET["critereSalle"] ==3){
		$critereSalle=3;
		$resultat = classement("salle","salle_id");
		$listenote = array();
		foreach ($resultat as $salle) {
			$salle['note'] = note($salle['salle_id'],"salle_id");
			$listenote[] = $salle['note'];
		}
		arsort($listenote);
		$definitif = array();
		$resultat2 = classement("salle","salle_id");
		$pointer = 0;
		foreach ($listenote as $key => $value) {
			$listenote[$pointer] = $key;
			$pointer = $pointer +1;
		}
		ksort($listenote);
		$pointer = 0;
		while($salle = $resultat2->fetch()){
			$salle['note'] = note($salle['salle_id'],"salle_id");
			foreach ($listenote as $key => $value) {
				if($value == $pointer){
					$entree = $salle;
					$definitif[$key] = $entree;
					ksort($definitif);
					break;
				}
			}
			$pointer = $pointer + 1;
		}		
	}	

}


include('controlleurs/bannierecontrolleur.php');
include ('views/listeSalles.php');
include('views/footer.php');

 ?>