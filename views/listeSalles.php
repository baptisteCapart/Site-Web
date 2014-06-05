
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
      <div class = "alpha">
          <div class="decl_ancre">
          <ul>    
              <li>
                <ul class="ancres">
                  <?php
                  foreach(range('A','Z') as $i) {
                      echo '<li class="ancre"><a href="index.php?page=listeSallescontrolleur&critereSalle=1#'.$i.'">'.$i.'</a></li>';
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
                  ?> <li><a href="index.php?page=pageSallecontrolleur&id=<?= $artiste['salle_id'] ?>"><img src="controlleurs/images/salles/<?=$artiste['photocover']?>"/><?= $artiste['nom'] ?></a></li> <?php
              } ?>
          </ul>
        </div>
<?php } ?>
      <?php  if($critereSalle==2){ ?> 
          <div class = "listeCP">
            <?php
              for ($i=0; $i < 95; $i++) { 
                  echo '<a href="index.php?page=listeSallescontrolleur&critereSalle=2&code_postal='.$i.'">'.$i.'</a>';
                  if ($i != "94") echo "   - ";
              }
            ?>
          </div>

          <div> 
              <ul>
                <?php
                    if(isset($LISTE)){
                      foreach ($LISTE as $salle){
                        echo ' <li><a href = "index.php?page=pagesallecontrolleur&id='.$salle["salle_id"].'"> <img src="controlleurs/images/'.$salle['photocover'].'" alt="" /> '. $salle["nom"].'<br/>'.' </a></li>';
                      }              
                ?>
              </ul>
          </div>
                    <?php }else echo "cliquez sur un département pour afficher les salles commençant par cette lettre";} ?> 
      	
  </div> 
</div>