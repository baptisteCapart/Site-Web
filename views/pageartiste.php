
  <?php include("views/banniere.php"); ?>
  <div id = "photoartiste" style="background-image:url(<?php echo 'controlleurs/images/'.$donnees['photocover']; ?>); ">
  <div id="nomartiste">
   <?= $donnees["nom"] ?>
  </div>
  </div>

  <div id="global2">
  <ul id="parametres2">
   <li><input class = "bouton2" type="submit" value="Paramètres" /></li>
   <li><input class = "bouton2" type="submit" value="Suivre"/></li>
  </ul>
  </div>

<div id="menudyna">

  <ul class = "page">
    <li class = "<?php if($onglet==1){ echo "active";}?>"> <?php echo'<a href = "index.php?page=pageartistecontrolleur&id='.$_SESSION['artisteID'].'&onglet=1"> Présentation </a>'; ?></li>
    <li class = "<?php if($onglet==2){ echo "active";}?>"><?php echo '<a href = "index.php?page=pageartistecontrolleur&id='.$_SESSION['artisteID'].'&onglet=2"> Concerts </a>'; ?></li>
    <li class = "<?php if($onglet==3){ echo "active";}?>"><?php echo '<a href = "index.php?page=pageartistecontrolleur&id='.$_SESSION['artisteID'].'&onglet=3"> Extraits </a>'; ?></li>
    <li class = "<?php if($onglet==4){ echo "active";}?>"><?php echo '<a href = "index.php?page=pageartistecontrolleur&id='.$_SESSION['artisteID'].'&onglet=4"> Avis </a>'; ?></li>
    <li class = "<?php if($onglet==5){ echo "active";}?>"><?php echo '<a href = "index.php?page=pageartistecontrolleur&id='.$_SESSION['artisteID'].'&onglet=5"> Photos </a>'; ?></li>
  </ul>
 </div> 

<div id="contenu">
    <?php  if($onglet==1){ ?> 
      <div class = "descrption"> <?= $donnees["description"] ?></div>
    <?php } ?> 

    <?php  if($onglet==2){ ?> 
      <div class = "concerts"> concerts</div>
    <?php } ?>

    <?php  if($onglet==3){ ?> 
      <div class = "extraits"> extraits</div>
    <?php } ?> 

    <?php  if($onglet==4){ ?> 
      <div class="rating rating2">
        <a href="#5" title="Give 5 stars">★</a>
        <a href="#4" title="Give 4 stars">★</a>
        <a href="#3" title="Give 3 stars">★</a>
        <a href="#2" title="Give 2 stars">★</a>
        <a href="#1" title="Give 1 star">★</a>
      </div>
    <?php } ?>   

    <?php  if($onglet==5){ ?> 
      <div class = "photos"> photos</div>
    <?php } ?> 

</div>



<?php include("views/footer.php"); ?>
