<div id = "photoconcert" style="background-image:url(<?php echo 'controlleurs/images/'.$donnees['photocover']; ?>); ">
<!-- 			<div id="nomconcert">
		        <?= $donnees["nom"] ?>
		    </div> -->

	<div id="menuConcert">
			<ul class = "page">
				<li class = "<?php if($ongletConcert==1){ echo "activeConcert";}?>"><?php echo'<a href = "index.php?page=pageconcertcontrolleur&id='.$_GET['id'].'&ongletConcert=1 #contenuConcert"> Présentation </a>'; ?></li>
				<li class = "<?php if($ongletConcert==3){ echo "activeConcert";}?>"><?php echo '<a href = "index.php?page=pageconcertcontrolleur&id='.$_GET['id'].'&ongletConcert=3 #contenuConcert"> Salle </a>'; ?></li>
				<li class = "<?php if($ongletConcert==2){ echo "activeConcert";}?>"><?php echo '<a href = "index.php?page=pageconcertcontrolleur&id='.$_GET['id'].'&ongletConcert=2 #contenuConcert"> Photos </a>'; ?></li>
				<li class = "<?php if($ongletConcert==4){ echo "activeConcert";}?>"><?php echo '<a href = "index.php?page=pageconcertcontrolleur&id='.$_GET['id'].'&ongletConcert=4 #contenuConcert"> Avis </a>'; ?></li>
			</ul>
 	</div> 

	<span class = "listegroupe" >
		<div><img  class = "hoverimg2" src="controlleurs/images/groupesalle.jpg" alt="participants">
			<div>
				<ul id="liste2"> <span class="groupespart">Ils s'y produisent : </span>
                    <?php  if(isset($LISTE)){    
                         foreach ($LISTE as $artiste){
                          echo ' <li><a href = "index.php?page=pageartistecontrolleur&id='.$artiste["artiste_id"].'">'. $artiste["nom"].'<br/>'.' </a></li>';
                        }}
                         ?>
				</ul>
			</div>
		</div>
	</span>
			
	<span class = "listembr" >
		<div><img  class = "hoverimg" src="controlleurs/images/membre.jpg" alt="participants"> 
			<div>
				<ul id="liste"> <span class="membres">Ils y participent : </span>
						<?php  if(isset($membreinfo)){    
                         	foreach ($membreinfo as $membre){
                          	echo ' <li><a href = "index.php?page=pageMembrecontrolleur&id='.$membre["membre_id"].'">'. $membre["pseudo"].'<br/>'.' </a></li>';
                        }}
                         ?>
				</ul>
			</div>
		</div>
		
	</span>
</div>


<div id="global3">
<ul id="parametres3">
	<li><form action=""><input class = "bouton3" type="submit" name = "participer" value="Participer"/></form></li>
</ul>
</div>



<div id="contenuConcert">
  <div id="textConcert">
    <?php  if($ongletConcert==1){ ?> 
      	<div class = "descrption"> 
			<?= $donnees['description'] ?>
  		</div>
    <?php } ?> 

    <?php  if($ongletConcert==3){ ?> 
      <div class = "salle"> 
		<?php echo '<a href="index.php?page=pageSallecontrolleur&id='.$salle['salle_id'].'">'.$salle["nom"].'</a>'; ?>
      </div>
    <?php } ?>


    <?php  if($ongletConcert==2){ ?> 
      <div class = "photos"> concerts</div>
    <?php } ?>


    <?php  if($ongletConcert==4){ ?> 
      <div class="rating rating2">
        <a href="#5" title="Give 5 stars">★</a>
        <a href="#4" title="Give 4 stars">★</a>
        <a href="#3" title="Give 3 stars">★</a>
        <a href="#2" title="Give 2 stars">★</a>
        <a href="#1" title="Give 1 star">★</a>
      </div>
    <?php } ?>   

  </div>
</div>