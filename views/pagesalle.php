
<?php include("views/banniere.php"); ?>

<div id = "photosalle" style="background-image:url(<?php echo 'controlleurs/images/'.$donnees['photocover']; ?>); ">
    <div id="nomsalle">
        <?= $donnees["nom"] ?>
        <?= $NbAbonnes["Nb"] ?>        
    </div>
    <div id="menuSalle">

  <ul class = "page">
    <li class = "<?php if($ongletSalle==1){ echo "activeSalle";}?>"><?php echo'<a href = "index.php?page=pagesallecontrolleur&id='.$_SESSION['salleID'].'&ongletSalle=1 #contenuSalle"> Présentation </a>'; ?></li>
    <li class = "<?php if($ongletSalle==2){ echo "activeSalle";}?>"><?php echo '<a href = "index.php?page=pagesallecontrolleur&id='.$_SESSION['salleID'].'&ongletSalle=2 #contenuSalle"> Concerts </a>'; ?></li>
    <li class = "<?php if($ongletSalle==4){ echo "activeSalle";}?>"><?php echo '<a href = "index.php?page=pagesallecontrolleur&id='.$_SESSION['salleID'].'&ongletSalle=4 #contenuSalle"> Avis </a>'; ?></li>
    <li class = "<?php if($ongletSalle==5){ echo "activeSalle";}?>"><?php echo '<a href = "index.php?page=pagesallecontrolleur&id='.$_SESSION['salleID'].'&ongletSalle=5 #contenuSalle"> Photos </a>'; ?></li>
  </ul>
 </div> 
</div>

<div id="global3">
<ul id="parametres3">
         <?php if(isset($_SESSION['id'])){
           if($createur['membre_id']==$_SESSION['id']) { ?>
	               <li><form class ="form3" method="post" action="index.php?page=ParametresSallecontrolleur<?='&id='.$_SESSION['artisteID'].''?>"><input class = "bouton3" type="submit" value="Paramètres" /></form></li>
        <?php }} ?>
  <?php if (isset($follower)){
    if($follower==true) {?>
    	 <li><form class ="form3" method="post" action="index.php?page=pageSallecontrolleur<?='&id='.$_SESSION['salleID'].''?>"><input class = "bouton3" type="submit" name = "suivre" value="Suivre"/></form></li>
  <?php }} ?>
</ul>
</div>



<div id="contenuSalle">
  <div id="textSalle">
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
</div>


<?php include("views/footer.php"); ?>

