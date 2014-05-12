
<div id="blocpage">
  <span class="membres">Membres</span><br>
  <div class="search_member">
  	<ul>
    <?php 
    if(isset($resultm))
    {
      if ($verifm['count(pseudo)'] != 0)
      {  
        foreach ($resultm as $membre)
        {
          echo ' <li><a href = "index.php?page=pageMembrecontrolleur&id='.$membre["membre_id"].'"> <img src="controlleurs/images/'.$membre['photoprofil'].'" alt="" /> <br/>'. $membre["pseudo"].'<br/>'.' </a></li>';
        }
      }
      else
      {
        echo "<span class='noresult'>$erreur</span>";
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
      if ($verifa['count(nom)'] != 0)
      {  
        foreach ($resulta as $artiste)
        {
          echo ' <li><a href = "index.php?page=pageartistecontrolleur&id='.$artiste["artiste_id"].'"> <img src="controlleurs/images/'.$artiste['photocover'].'" alt="" /> '. $artiste["nom"].'<br/>'.' </a></li>';
        }
      }
      else
      {
        echo "<span class='noresult'>$erreur</span>";
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
      if ($verifs['count(nom)'] != 0)
      {  
        foreach ($results as $salle)
        {
          echo ' <li><a href = "index.php?page=pageSallecontrolleur&id='.$salle["salle_id"].'"> <img src="controlleurs/images/'.$salle['photocover'].'" alt="" /> '. $salle["nom"].'<br/>'.' </a></li>';
        }
      }
      else
      {
        echo "<span class='noresult'>$erreur</span>";
      }
    }
    ?>
    </ul>
  </div>

  <span class="concerts">Concerts</span> <br>
  <div class="search_concert">
    <ul>
    <?php 
    if(isset($resultc))
    {
      if ($verifc['count(nom)'] != 0)
      {  
        foreach ($resultc as $concert)
        {
          echo ' <li><a href = "index.php?page=pagconcertcontrolleur&id='.$concert["concert_id"].'"> <img src="controlleurs/images/'.$concert['photocover'].'" alt="" /> '. $concert["nom"].'<br/>'.' </a></li>';
        }
      }
      else
      {
        echo "<span class='noresult'>$erreur</span>";
      }
    }
    ?>
    </ul>
  </div>
  
</div>