
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
			    <ul>  	
			      	<li>
			      		<ul class="ancres">
				        	<?php
				       		foreach(range('A','Z') as $i) {
				            	echo '<li class="ancre"><a href="index.php?page=listeartistecontrolleur#'.$i.'">'.$i.'</a></li>';
				        	} ?>
			    		</ul>
			      	</li>
				    <li>Saut rapide</li>
				</ul>
			</div>
          	<ul class="liste_artistes">
	            <?php 
	            $current = '0';
	        	foreach ($listealpha as $artiste) {
	            	$test_letter= substr($artiste['nom'], 0, 1);
	              	if ($test_letter!= $current) {
	                	$current= $test_letter;
	                	echo "<span id=".$current.">".$current."</span>";
	              	}
	              	?> <li><a href="index.php?page=pageartistecontrolleur&id=<?= $artiste['artiste_id'] ?>"><img src="controlleurs/images/artistes/<?=$artiste['photocover']?>"/><?= $artiste['nom'] ?></a></li> <?php
	            } ?>
	        </ul>
        </div>
        <?php } ?>

	    <?php  if($critere==2){ ?> 
		    <div class = "style">
				<ul class="liste_artistes">
					<?php 
					$current ="";
					foreach ($listestyle as $style => $artistes) {
						if ($style != $current) {
							$current = $style;
							echo "<span class = 'stylegondole'>".$current."</span></br>";
						}
						foreach ($artistes as $artiste) {
							?> <li><a href="index.php?page=pageartistecontrolleur&id=<?= $artiste['artiste_id'] ?>"><img src="controlleurs/images/artistes/<?=$artiste['photocover']?>"/><?= $artiste['nom'] ?></a></li> <?php
						}
					}
					 ?>
				</ul>
		    </div>
	    <?php } ?>

	    <?php  if($critere==3){ ?> 
		    <div class = "note">
		    	<ul class="liste_artistes">
				<?php foreach($definitif as $artiste){ ?>
			    	<li><a href = "index.php?page=pageartistecontrolleur&id=<?= $artiste['artiste_id'] ?>"><img src="controlleurs/images/artistes/<?=$artiste['photocover'] ?>" alt="" /><?=$artiste["nom"].' '.$artiste['note']?></a></li> <?php
				} ?>
		    	</ul>
		    </div>
	    <?php } ?> 
	      	
  </div> 
</div>