
<div id="blocpage">
  <div id="listeSalle">

    <span class = "titresalles"> Salles </span>

    <ul>
        <li class = "<?php if($critereSalle==1){ echo "critereSalleactif";}?>"> <?php echo'<a href = "index.php?page=listeSallescontrolleur&critereSalle=1"> Par ordre alphabétique</a>'; ?>
    	  </li>

        <li class = "<?php if($critereSalle==2){ echo "critereSalleactif";}?>"><?php echo '<a href = "index.php?page=listeSallescontrolleur&critereSalle=2"> Par Lieu  </a>'; ?>
        </li>
    </ul>
  </div> 



  <div id="contenuliste">
      <?php  if($critereSalle==1){ ?> 
        <div> <ul><?php
  			foreach ($listesalle as $salle)
  			{echo ' <li><a href = "index.php?page=pagesallecontrolleur&id='.$salle["salle_id"].'"> <img src="controlleurs/images/'.$salle['photocover'].'" alt="" /> '. $salle["nom"].'<br/>'.' </a></li>';}
  		?></ul></div>
      <?php } ?> 

       <?php  if($critereSalle==2){ ?> 
        <div> Liste des salles classées par lieu</div>
      <?php } ?>
      	
  </div> 
</div>