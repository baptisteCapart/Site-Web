
<?php include("views/banniere.php"); ?>


<div id="listeSalle">

  <ul>
      <li class = "<?php if($critereSalle==1){ echo "critereSalleActif";}?>"> <?php echo'<a href = "index.php?page=listeSallescontrolleur&critereSalle=1"> Par ordre alphabétique</a>'; ?>
  	  </li>

      <li class = "<?php if($critereSalle==2){ echo "critereSalleActif";}?>"><?php echo '<a href = "index.php?page=listeSallescontrolleur&critereSalle=2"> Par Lieu  </a>'; ?>
      </li>
  </ul>
</div> 



<div id="contenuliste">
    <?php  if($critereSalle==1){ ?> 
      <div> <ul><?php
			foreach ($listesalle as $salle)
			{echo ' <li><a href = "index.php?page=pagesallecontrolleur&id='.$salle["salle_id"].'">'. $salle["nom"].'<br/>'.' </a></li>';}
		?></ul></div>
    <?php } ?> 

     <?php  if($critereSalle==2){ ?> 
      <div> Liste des salles classées par lieu</div>
    <?php } ?>
    	
</div> 

		
<?php include("views/footer.php"); ?>