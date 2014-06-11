
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
              $date = new datetime($concert['jour']);
                $test_letter= $date->format('d/m/Y');
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
      <div >
          <div class="lieu">

                  <?php
                  foreach(range('1','95') as $i) {
                      echo '<a href="index.php?page=listeConcertscontrolleur&critereConcert=2#'.$i.'">'.$i.'  |   </a>';
                  } ?>

      </div>
            <ul class="liste_artistes">
              <?php 
              $current = '0';
            foreach ($listedep as $concert) {
                $test_letter= (int)($concert['code_postal']/1000);
                  if ($test_letter!= $current) {
                    $current= $test_letter;
                    echo "<span id=".$current.">".$current."</span>";
                  }
                  ?> <li><a href="index.php?page=pageConcertcontrolleur&id=<?= $concert['concert_id'] ?>"><img src="controlleurs/images/concerts/<?=$concert['photocover']?>"/>
                  <?= $concert['nom'] ?> 
                  </a><br><span class="lieuconcert">Lieu : </span></li><br>
              <?php
              } ?>
          </ul>
        </div> 
      <?php } ?>
      	
  </div> 
</div>