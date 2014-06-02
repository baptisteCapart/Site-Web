<?php 

include ('models/artistemodel.php');

$critere =1;

if(isset($_GET['critere'])){

	if ($_GET["critere"] ==1){
		$critere=1;
		$listealpha = trialpha();
	}	
	if ($_GET["critere"] ==2){
		$critere=2;
		$styles = getStyle();
		$listestyle = getArtistes($styles);
	}
	if ($_GET["critere"] ==3){
		$critere=3;
		$resultat = classement();
		$listenote = array();
		foreach ($resultat as $artiste) {
			$artiste['note'] = note($artiste['artiste_id']);
			$listenote[] = $artiste['note'];
		}
		arsort($listenote);
		foreach ($resultat as $key => $artiste) {
			$listenote[$key] = $artiste[$key];
		}
		var_dump($listenote);
	}
}
else 
{
	$listealpha = trialpha();
}


include('controlleurs/bannierecontrolleur.php');
include ('views/listeartistes.php');
include('views/footer.php');
 ?>