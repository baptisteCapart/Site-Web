
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
        <div class = "alpha">
	      	<div class="decl_ancre">
	      	<ul class="ancres">
		        <?php
		       	foreach(range('A','Z') as $i) {
		            echo '<li class="ancre"><a href="index.php?page=listeartistecontrolleur#'.$i.'">'.$i.'</a></li>';
		        }
		    	}
		    	?>
	    	</ul>
		    Saut rapide</div>
          	<ul class="liste_artistes">
	            <?php 
	            $listealpha = trialpha();
	            $cur_letter = '0';
	        	foreach ($listealpha as $artiste) {
	            	$test_letter= substr($artiste['nom'], 0, 1);
	              	if ($test_letter!= $cur_letter) {
	                	$cur_letter= $test_letter;
	                	echo "<span id=".$cur_letter.">".$cur_letter."</span>";
	              	}
	              	?> <li><a href="index.php?page=pageartistecontrolleur&id=<?= $artiste['artiste_id'] ?>"><img src="controlleurs/images/<?= $artiste['photocover'] ?>"><?= $artiste['nom'] ?></a></li> <?php
	            } ?>
	        </ul>
        </div>

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