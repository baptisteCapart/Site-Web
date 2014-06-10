<?php 

include ('models/artistemodel.php');
include ('models/trimodel.php');

$critere =1;

if(isset($_GET['critere'])){

	if ($_GET["critere"] ==1){
		$critere=1;
		$listealpha = trialpha("artiste");
	}	
	if ($_GET["critere"] ==2){
		$critere=2;
		$styles = getStyle();
		$listestyle = getArtistes($styles);
	}
	if ($_GET["critere"] ==3){
		$critere=3;
		$resultat = classement("artiste","artiste_id");
		$listenote = array();
		foreach ($resultat as $artiste) {
			$artiste['note'] = note($artiste['artiste_id'],"artiste_id");
			$listenote[] = $artiste['note'];
		}
		arsort($listenote);
		$definitif = array();
		$resultat2 = classement("artiste","artiste_id");
		$pointer = 0;
		foreach ($listenote as $key => $value) {
			$listenote[$pointer] = $key;
			$pointer = $pointer +1;
		}
		ksort($listenote);
		$pointer = 0;
		while($artiste = $resultat2->fetch()){
			$artiste['note'] = note($artiste['artiste_id'],"artiste_id");
			foreach ($listenote as $key => $value) {
				if($value == $pointer){
					$entree = $artiste;
					$definitif[$key] = $entree;
					ksort($definitif);
					break;
				}
			}
			$pointer = $pointer + 1;
		}
	}
}
else 
{
	$listealpha = trialpha("artiste");
}


include('controlleurs/bannierecontrolleur.php');
include ('views/listeartistes.php');
include('views/footer.php');
 ?>