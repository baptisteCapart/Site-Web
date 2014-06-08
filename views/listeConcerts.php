
<div id="blocpage">
  <div id="listeConcert">

    <span class = "titreconcerts"> Concerts </span>

    <ul>
        <li class = "<?php if($critereConcert==1){ echo "critereConcertactif";}?>"> <?php echo'<a href = "index.php?page=listeConcertscontrolleur&critereConcert=1"> Par Date</a>'; ?>
    	  </li>

        <li class = "<?php if($critereConcert==2){ echo "critereConcertactif";}?>"><?php echo '<a href = "index.php?page=listeConcertscontrolleur&critereConcert=2"> Par Lieu  </a>'; ?>
        </li>
    </ul>
  </div> 



  <div id="contenuliste">
       <?php  if($critereConcert==1){ ?> 
    <div class = "alpha">
          
            <ul class="liste_artistes">
              <?php 
              $current = '0';
            foreach ($listeDate as $concert) {
                $test_letter= $concert['jour'];
                  if ($test_letter!= $current) {
                    $current= $test_letter;
                    echo "<span id=".$current.">".$current."</span>";
                  }
                  ?> <li><a href="index.php?page=pageConcertcontrolleur&id=<?= $concert['concert_id'] ?>"><img src="controlleurs/images/concerts/<?=$concert['photocover']?>"/><?= $concert['nom'] ?></a></li> <?php
              } ?>
          </ul>
        </div>
      <?php } ?>

       <?php  if($critereConcert==2){ ?> 
        <div> Liste des concerts classées par lieu</div>
      <?php } ?>
      	
  </div> 
</div>