
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
          <div class = "listelettres">
              <?php
              foreach(range('A','Z') as $i) {
                  echo '<a href="index.php?page=listeSallescontrolleur&lettre='.$i.'">'.$i.'</a>';
                  if ($i != "Z") echo "   - ";
              }
              ?>
          </div>
          <div> <ul><?php  if(isset($LISTE)){
                        foreach ($LISTE as $salle){
                          echo ' <li><a href = "index.php?page=pagesallecontrolleur&id='.$salle["salle_id"].'"> <img src="controlleurs/images/'.$salle['photocover'].'" alt="" /> '. $salle["nom"].'<br/>'.' </a></li>';
                        }
  		              ?>
                </ul>
          </div>
          <?php }else echo "cliquez sur une lettre pour afficher les salles commençant par cette lettre";} ?> 

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