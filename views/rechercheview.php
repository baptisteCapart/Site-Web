
<div id="blocrecherche">
  <span class="membres">Membres</span><br>
  <div class="search_member">
  	<ul>
    <?php 
    if(isset($resultm))
    {
      if (!$resultm){
        echo $erreur;
      } else {
        foreach ($resultm as $membre){
          echo ' <li><a href = "index.php?page=pageMembrecontrolleur&id='.$membre["membre_id"].'"> <img src="controlleurs/images/'.$membre['photoprofil'].'" alt="" /> <br/>'. $membre["pseudo"].'<br/>'.' </a></li>';
        }
      }
    }
  		?>
  	</ul>
  </div>

  <span class="artistes">Artistes</span><br>
  <div class="search_artist">
    <ul>
    <?php 
    if(isset($resulta))
    {
      if (!$resulta){
        echo $erreur;
      } else {
        foreach ($resulta as $artiste){
          echo ' <li><a href = "index.php?page=pageartistecontrolleur&id='.$artiste["artiste_id"].'"> <img src="controlleurs/images/'.$artiste['photocover'].'" alt="" /> '. $artiste["nom"].'<br/>'.' </a></li>';
        }
      }
    }
    ?>
    </ul>
  </div>

  <span class="salles">Salles</span><br>
<div class="search_room">
    <ul>
    <?php 
    if(isset($results))
    {
      if (!$results){
        echo $erreur;
      } else {
        foreach ($results as $salle){
          echo ' <li><a href = "index.php?page=pageSallecontrolleur&id='.$salle["salle_id"].'"> <img src="controlleurs/images/'.$salle['photocover'].'" alt="" /> '. $salle["nom"].'<br/>'.' </a></li>';
       }
      }
    }
    ?>
    </ul>
  </div>

  <span class="concerts">Concerts</span> <br>
  <div class="search_concert">
    <ul>
    <?php 
    if(isset($resultc)){
      if (!$resultc){
        echo $erreur;
      } else {
        foreach ($resultc as $concert)
        {
          echo ' <li><a href = "index.php?page=pagconcertcontrolleur&id='.$concert["concert_id"].'"> <img src="controlleurs/images/'.$concert['photocover'].'" alt="" /> '. $concert["nom"].'<br/>'.' </a></li>';
        }
      }
    }
    ?>
    </ul>
  </div>
  
</div>