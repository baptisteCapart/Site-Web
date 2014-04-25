
<?php include("views/banniere.php"); ?>

<div id= "cover" style="background-image:url(<?php echo 'controlleurs/images/'.$donnees['photocover']; ?>); " >
</div>

<div id="donnees">	
	<ul id="membre">
		<li>
			<div>
				<img id="image" src=<?= '"controlleurs/images/'.$donnees['photoprofil'].'"' ?> alt="Photo de Gérard" />
			</div>
		</li>
		<li id="donneesmembre">
			<ul>
				<li><?= $_SESSION['pseudo'] ?> </li>
				<li><?= $donnees['sexe'] ?></li>
				<li><?= $birthdate ?></li>
				<li><?= $donnees['ville'] ?></li>
				<li><?= $donnees['pays'] ?></li>
			</ul>
		</li>

	</ul>
	
</div>

<div id="global">
    <ul id="parametres">
    	<li><form class ="form3" method="post" action="index.php?page=ParametresMembrecontrolleur"><input class = "bouton" type="submit" value="Paramètres" /></form></li>
    	<li><input class = "bouton" type="submit" value="Suivre"/></li>
    	<li><input class = "bouton" type="submit" value="Envoyer un message"/></li>
    </ul>
</div>

<div id="menuMembre">
        <ul>
            <li class = "<?php if($ongletMembre==1){ echo "actifMembre";}?>"> <?php echo'<a href = "index.php?page=PageMembrecontrolleur&ongletMembre=1 #menuMembre"> Artistes</a>'; ?>
            </li>

            <li class = "<?php if($ongletMembre==2){ echo "actifMembre";}?>"><?php echo '<a href = "index.php?page=PageMembrecontrolleur&ongletMembre=2 #menuMembre"> Salles </a>'; ?>
            </li>

            <li class = "<?php if($ongletMembre==3){ echo "actifMembre";}?>"> <?php echo'<a href = "index.php?page=PageMembrecontrolleur&ongletMembre=3 #menuMembre"> Concerts</a>'; ?>
            </li>

            <li class = "<?php if($ongletMembre==4){ echo "actifMembre";}?>"><?php echo '<a href = "index.php?page=PageMembrecontrolleur&ongletMembre=4 #menuMembre"> Avis </a>'; ?>
            </li>      
        </ul>
</div> 

<div id="contenuMembre">
    <?php  if($ongletMembre==1){ ?> 
      <div id = "listeSuivis"> 
            <?php foreach($liste as $listeArtistesSuivis) { 
                echo ' <li><a href = "index.php?page=pageartistecontrolleur&id='.$listeArtistesSuivis["artiste_id"].'">'. $listeArtistesSuivis["nom"].'<br/>'.' </a></li>';}
            ?> 
       </div>
    <?php } ?> 

    <?php  if($ongletMembre==2){ ?> 
      <div id = "listeSuivis"> 
            <?php foreach($liste2 as $listeSallesSuivies) { 
                echo ' <li><a href = "index.php?page=pageSallecontrolleur&id='.$listeSallesSuivies["salle_id"].'">'. $listeSallesSuivies["nom"].'<br/>'.' </a></li>';}
            ?> 
      </div>
    <?php } ?>

    <?php  if($ongletMembre==3){ ?> 
      <div> concerts suivis par ce membre </div>
    <?php } ?>

    <?php  if($ongletMembre==4){ ?> 
      <div> avis donnés par ce membre </div>
    <?php } ?>
    	
</div> 

		
<?php include("views/footer.php"); ?>

