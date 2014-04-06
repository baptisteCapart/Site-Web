
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
				<li><?= $donnees['date_de_naissance'] ?></li>
				<li><?= $donnees['ville'] ?></li>
				<li><?= $donnees['pays'] ?></li>
				<li><?= $donnees['code_postal'] ?></li>
			</ul>
		</li>

	</ul>
	
</div>

<div id="global">
<ul id="parametres">
	<li><input class = "bouton" type="submit" value="Paramètres" /></li>
	<li><input class = "bouton" type="submit" value="Suivre"/></li>
	<li><input class = "bouton" type="submit" value="Envoyer un message"/></li>
</ul>
</div>

<div id="menuMembre">

  <ul>
      <li class = "<?php if($ongletMembre==1){ echo "actifMembre";}?>"> <?php echo'<a href = "index.php?page=PageMembrecontrolleur&ongletMembre=1"> Artistes</a>'; ?>
  	  </li>

      <li class = "<?php if($ongletMembre==2){ echo "actifMembre";}?>"><?php echo '<a href = "index.php?page=PageMembrecontrolleur&ongletMembre=2"> Salles </a>'; ?>
      </li>

      <li class = "<?php if($ongletMembre==3){ echo "actifMembre";}?>"> <?php echo'<a href = "index.php?page=PageMembrecontrolleur&ongletMembre=3"> Concerts</a>'; ?>
  	  </li>

      <li class = "<?php if($ongletMembre==4){ echo "actifMembre";}?>"><?php echo '<a href = "index.php?page=PageMembrecontrolleur&ongletMembre=4"> Avis </a>'; ?>
      </li>      
  </ul>
</div> 

<div id="contenuMembre">
    <?php  if($ongletMembre==1){ ?> 
      <div> artistes suivis par ce membre </div>
    <?php } ?> 

    <?php  if($ongletMembre==2){ ?> 
      <div> salles suivies par ce membre </div>
    <?php } ?>

    <?php  if($ongletMembre==3){ ?> 
      <div> concerts suivis par ce membre </div>
    <?php } ?>

    <?php  if($ongletMembre==4){ ?> 
      <div> avis donnés par ce membre </div>
    <?php } ?>
    	
</div> 

		
<?php include("views/footer.php"); ?>

