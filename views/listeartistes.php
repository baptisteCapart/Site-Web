
<div id="blocpage">
  <div id="listeartiste">
      <span class = "titreartistes"> Artistes </span>

      <ul>
          <li class = "<?php if($critere==1){ echo "critereactif";}?>"> <?php echo'<a href = "index.php?page=listeartistecontrolleur&critere=1"> Par ordre alphabétique</a>'; ?>
      	  </li>

          <li class = "<?php if($critere==2){ echo "critereactif";}?>"><?php echo '<a href = "index.php?page=listeartistecontrolleur&critere=2"> Par style </a>'; ?>
          </li>
          <li class = "<?php if($critere==3){ echo "critereactif";}?>"><?php echo '<a href = "index.php?page=listeartistecontrolleur&critere=3"> Par note </a>'; ?>
          </li>          
      </ul>

  </div> 

  <div id="contenuliste">
      <?php  if($critere==1){ ?> 
      <div class = "listelettres">
          <?php
          foreach(range('A','Z') as $i) {
              echo '<a href="index.php?page=listeartistecontrolleur&lettre='.$i.'">'.$i.'</a>';
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

      <?php  if($critere==3){ ?> 
        <div class = "style"> Liste des artistes classés par note
          <?php if(isset($notes)){ foreach($notes as $listenotes){
            echo ' <li><a href = "index.php?page=pageartistecontrolleur&id='.$listenotes["artiste_id"].'"> <img src="controlleurs/images/'.$listenotes['photocover'].'" alt="" /> '. $listenotes["nom"].'<br/>'.' </a></li>';
          }} ?>
        </div>
       <?php } ?> 
      	
  </div> 
</div>