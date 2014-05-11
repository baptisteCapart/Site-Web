<?php

include ('models/membremodel.php');
include ('models/SuivreModel.php');

$donnees = recuperer($_GET['id']);
$arr = explode('-', $donnees['date_de_naissance']);
$birthdate = $arr[2].'-'.$arr[1].'-'.$arr[0];
$ongletMembre =1;

if(isset($_GET['ongletMembre'])){

	if ($_GET["ongletMembre"] ==1){
		$ongletMembre=1;
	}	
	if ($_GET["ongletMembre"] ==2){
		$ongletMembre=2;
	}

	if ($_GET["ongletMembre"] ==3){
		$ongletMembre=3;
	}

	if ($_GET["ongletMembre"] ==4){
		$ongletMembre=4;
	}

}	


if( !empty ($_POST['mail']) AND !empty ($_POST['ville']) AND !empty ($_POST['codepostal']) AND !empty ($_POST['pays']) AND !empty ($_POST['sexe']) )
{
	
		$mail = mysql_real_escape_string(htmlspecialchars($_POST['mail']));
		$sexe = mysql_real_escape_string(htmlspecialchars($_POST['sexe']));
		$codepostal = mysql_real_escape_string(htmlspecialchars($_POST['codepostal']));
		$pays = mysql_real_escape_string(htmlspecialchars($_POST['pays']));
		$ville = mysql_real_escape_string(htmlspecialchars($_POST['ville']));
		$age = mysql_real_escape_string(htmlspecialchars($_POST['age']));

		$photodeprofil = "";
		$photodecover = "";


		if(!empty($_POST['photodeprofil'])){
			$photodeprofil = mysql_real_escape_string(htmlspecialchars($_POST['photodeprofil']));
		}
		if(!empty($_POST['photodecover'])){
			$photodecover = mysql_real_escape_string(htmlspecialchars($_POST['photodecover']));
		} 	

		if ($photodeprofil == ""){
			$photodeprofil = $donnees['photoprofil'];
		}
		if ($photodecover == ""){
			$photodecover = $donnees['photocover'];
		}		


		modifier($_SESSION['id'], $mail , $age, $codepostal, $ville ,$sexe, $pays,$photodeprofil, $photodecover);
}


$liste=ArtistesSuivis($_GET['id']);
$liste2 = SallesSuivies($_GET['id']);


include('controlleurs/bannierecontrolleur.php');
include ('views/PageMembre.php');
include('views/footer.php');

 ?>