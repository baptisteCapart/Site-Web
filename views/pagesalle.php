
<?php include("views/banniere.php"); ?>

<div id = "photosalle" style="background-image:url(<?php echo 'controlleurs/images/'.$donnees['photocover']; ?>); ">
    <div id="nomsalle">
        <?= $donnees["nom"] ?>
    </div>
</div>

<div id="global3">
<ul id="parametres3">
	<li><input class = "bouton3" type="submit" value="Paramètres" /></li>
	<li><input class = "bouton3" type="submit" value="Suivre"/></li>
</ul>
</div>

<div id="menuSalle">

  <ul class = "page">
    <li class = "<?php if($ongletSalle==1){ echo "activeSalle";}?>"> <?php echo'<a href = "index.php?page=pagesallecontrolleur&id='.$_SESSION['salleID'].'&onglet=1"> Présentation </a>'; ?></li>
    <li class = "<?php if($ongletSalle==2){ echo "activeSalle";}?>"><?php echo '<a href = "index.php?page=pagesallecontrolleur&id='.$_SESSION['salleID'].'&onglet=2"> Concerts </a>'; ?></li>
    <li class = "<?php if($ongletSalle==3){ echo "activeSalle";}?>"><?php echo '<a href = "index.php?page=pagesallecontrolleur&id='.$_SESSION['salleID'].'&onglet=3"> Extraits </a>'; ?></li>
    <li class = "<?php if($ongletSalle==4){ echo "activeSalle";}?>"><?php echo '<a href = "index.php?page=pagesallecontrolleur&id='.$_SESSION['salleID'].'&onglet=4"> Avis </a>'; ?></li>
    <li class = "<?php if($ongletSalle==5){ echo "activeSalle";}?>"><?php echo '<a href = "index.php?page=pagesallecontrolleur&id='.$_SESSION['salleID'].'&onglet=5"> Photos </a>'; ?></li>
  </ul>
 </div> 

<div id="contenuSalle">
    <?php  if($ongletSalle==1){ ?> 
      	<div class = "descrption"> 
	      	<ul>
		      	<li><?= $donnees['adresse'] ?></li>
		      	<li><?= $donnees['ville'] ?></li>
		      	<li><?= $donnees['code_postal'] ?></li>
	      	</ul>	
  		</div>
    <?php } ?> 

    <?php  if($ongletSalle==2){ ?> 
      <div class = "concerts"> concerts</div>
    <?php } ?>

    <?php  if($ongletSalle==3){ ?> 
      <div class = "extraits"> extraits</div>
    <?php } ?> 

    <?php  if($ongletSalle==4){ ?> 
      <div class="rating rating2">
        <a href="#5" title="Give 5 stars">★</a>
        <a href="#4" title="Give 4 stars">★</a>
        <a href="#3" title="Give 3 stars">★</a>
        <a href="#2" title="Give 2 stars">★</a>
        <a href="#1" title="Give 1 star">★</a>
      </div>
    <?php } ?>   

    <?php  if($ongletSalle==5){ ?> 
      <div class = "photos"> photos</div>
    <?php } ?> 

</div>


<?php include("views/footer.php"); ?>

