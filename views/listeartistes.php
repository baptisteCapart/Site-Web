
<?php include("views/banniere.php"); ?>

<div id="blocpage">
  <div id="listeartiste">
      <span class = "titreartistes"> Artistes </span>

      <ul>
          <li class = "<?php if($critere==1){ echo "critereactif";}?>"> <?php echo'<a href = "index.php?page=listeartistecontrolleur&critere=1"> Par ordre alphabétique</a>'; ?>
      	  </li>

          <li class = "<?php if($critere==2){ echo "critereactif";}?>"><?php echo '<a href = "index.php?page=listeartistecontrolleur&critere=2"> Par style </a>'; ?>
          </li>
      </ul>

  </div> 



  <div id="contenuliste">
      <?php  if($critere==1){ ?> 
        <div class = "alpha"> <ul><?php
  			foreach ($listegroupe as $group)
  			{echo ' <li><a href = "index.php?page=pageartistecontrolleur&id='.$group["artiste_id"].'">'. $group["nom"].'<br/>'.' </a></li>';}
  		?></ul></div>
      <?php } ?> 

       <?php  if($critere==2){ ?> 
        <div class = "style"> Liste des artistes classés par genre</div>
      <?php } ?>
      	
  </div> 
</div>
		
<?php include("views/footer.php"); ?>