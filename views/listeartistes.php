
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
      <div class = "listelettres">
          <?php
          foreach(range('A','Z') as $i) {
              echo '<a href="index.php?page=listeartistecontrolleur&lettre='.$i.'">'.$i.'</a>';
              // On peut ajouter un séparateur
              if ($i != "Z") echo "   -    ";
          }
          ?>
      </div>
        <div class = "alpha"> <ul>
  			<?php if(isset($LISTE)){ foreach ($LISTE as $group)
  			{echo ' <li><a href = "index.php?page=pageartistecontrolleur&id='.$group["artiste_id"].'"> <img src="controlleurs/images/'.$group['photocover'].'" alt="" /> '. $group["nom"].'<br/>'.' </a></li>';}
  		?></ul></div>
      <?php }else echo "cliquez sur une lettre pour afficher les artistes commençant par cette lettre";} ?> 

       <?php  if($critere==2){ ?> 
        <div class = "style"> Liste des artistes classés par genre</div>
      <?php } ?>
      	
  </div> 
</div>