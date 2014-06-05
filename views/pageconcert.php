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
                    <span id="participants">
                    <?php  if(isset($LISTE)){    
                         foreach ($LISTE as $artiste){
                          echo ' <li><a href = "index.php?page=pageartistecontrolleur&id='.$artiste["artiste_id"].'">'. $artiste["nom"].'<br/>'.' </a></li>';
                        }}
                         ?>
                     </span>
				</ul>
			</div>
		</div>
	</span>
			
	<span class = "listembr" >
		<div><img  class = "hoverimg" src="controlleurs/images/membre.jpg" alt="participants"> 
			<div>
				<ul id="liste"> <span class="groupespart">Ils y participent : </span>
						 <span id="participants">
						<?php  if($check==false){
							if(isset($listemembre)){    
	                         	foreach ($listemembre as $membre){
	                          		echo ' <li><a href = "index.php?page=pageMembrecontrolleur&id='.$membre["membre_id"].'">'. $membre["pseudo"].'<br/>'.' </a></li>';
	                        	}
	                    	}
	                    }else{
	                    	echo "<br />personne ne se rend à ce concert pour l'insant";
	                	}
                        ?>
                    </span>
				</ul>
			</div>
		</div>
		
	</span>
</div>


<div id="global3">
<ul id="parametres3">
	<?php if (isset($check)){
		if($check==true){ ?>
			<li><form method = "post" action="index.php?page=pageconcertcontrolleur<?='&id='.$_SESSION['concertID'].''?>"><input class = "bouton3" type="submit" name = "participer" value="Participer"/></form></li>
	<?php }} ?>
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
	<?php if(isset($_SESSION['id'])) { ?>
        <?php if ($artiste!= $donnees['artiste_id'] && $salle!= $donnees['salle_id']) { ?>
          <div id="AVIS">
              <span class="intro">Clique sur le nombre d'étoiles que tu désires et laisse un commentaire pour noter cet artiste !</span>
              <div class="rating rating2">
                <?php echo '<a href = "index.php?page=pageConcertcontrolleur&id='.$_SESSION['concertID'].'&ongletConcert=4&note=5 #contenuConcert"> ★ </a>'; ?>
                <?php echo '<a href = "index.php?page=pageConcertcontrolleur&id='.$_SESSION['concertID'].'&ongletConcert=4&note=4 #contenuConcert"> ★ </a>'; ?>
                <?php echo '<a href = "index.php?page=pageConcertcontrolleur&id='.$_SESSION['concertID'].'&ongletConcert=4&note=3 #contenuConcert"> ★ </a>'; ?>
                <?php echo '<a href = "index.php?page=pageConcertcontrolleur&id='.$_SESSION['concertID'].'&ongletConcert=4&note=2 #contenuConcert"> ★ </a>'; ?>
                <?php echo '<a href = "index.php?page=pageConcertcontrolleur&id='.$_SESSION['concertID'].'&ongletConcert=4&note=1 #contenuConcert"> ★ </a>'; ?>
             </div>
              <div class="taperText">
                  <form method="post" action="#">
                      <label for="contenu"></label><br><textarea name="contenu" id="message" cols="50" rows="3"></textarea> <br>
                      <input type="submit" value="Envoyer" />
                 </form>
              </div>
         <?php }if($artiste!= $donnees['artiste_id'] || $salle!= $donnees['salle_id']){ ?>  
                 <span class="autorisation">Vous ne pouvez pas donner d'avis sur votre propre concert</span>
        <?php } ?>                                  
      <?php }else { ?>
                <span class="autorisation">Pour donner un avis sur un concert, merci de créer un compte sur Tune in Town</span>    
        <?php } ?>
            <div class="fil">
                 <?php while ($liste = $listeAvis->fetch()) { ?>
                      <div class="post">
                          <span class="auteurAvis">
                            <?php 
                              $name = AuteurAvis($liste['membre_id']);
                              echo("$name : ");
                              ?>
                          </span>

                          <span class="note">
                            <?php 
                              if($liste['note'] == 1 ){
                                  echo('★');
                              }
                              

                              if($liste['note'] == 2 ){
                                  echo('★★');
                              }
                              
                              if($liste['note'] == 3 ){
                                  echo('★★★');
                              }
                              
                              if($liste['note'] == 4 ){
                                  echo('★★★★');
                              }
                              
                              if($liste['note'] == 5 ){
                                  echo('★★★★★');
                              }
                            ?>  
                                <br>                                                                                                     
                          </span>                          
                          <span class="contenuAvis">
                            <?php 
                            $contenu = $liste['contenu'];
                            echo("\"$contenu\"");
                            ?>

                          </span>
                      </div>
                <?php } ?>
            </div>

    <?php } ?>   

  </div>
</div>