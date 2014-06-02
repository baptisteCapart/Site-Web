
<div id = "photosalle" style="background-image:url(<?php echo 'controlleurs/images/'.$donnees['photocover']; ?>); ">
    <div id="nomsalle">
        <?= $donnees["nom"] ?>
<!--         <?= $NbAbonnes["Nb"] ?>        
 -->    </div>
    <div id="menuSalle">

  <ul class = "page">
    <li class = "<?php if($ongletSalle==1){ echo "activeSalle";}?>"><?php echo'<a href = "index.php?page=pagesallecontrolleur&id='.$_SESSION['salleID'].'&ongletSalle=1 #contenuSalle"> Présentation </a>'; ?></li>
    <li class = "<?php if($ongletSalle==2){ echo "activeSalle";}?>"><?php echo '<a href = "index.php?page=pagesallecontrolleur&id='.$_SESSION['salleID'].'&ongletSalle=2 #contenuSalle"> Concerts </a>'; ?></li>
    <li class = "<?php if($ongletSalle==4){ echo "activeSalle";}?>"><?php echo '<a href = "index.php?page=pagesallecontrolleur&id='.$_SESSION['salleID'].'&ongletSalle=4 #contenuSalle"> Avis </a>'; ?></li>
    <li class = "<?php if($ongletSalle==5){ echo "activeSalle";}?>"><?php echo '<a href = "index.php?page=pagesallecontrolleur&id='.$_SESSION['salleID'].'&ongletSalle=5 #contenuSalle"> Photos </a>'; ?></li>
      <?php if(isset($_SESSION['id'])){
           if($createur['membre_id']==$_SESSION['id']) { ?>
    <li class = "<?php if($ongletSalle==6){ echo "activeSalle";}?>"><?php echo '<a href = "index.php?page=pagesallecontrolleur&id='.$_SESSION['salleID'].'&ongletSalle=6 #contenuSalle"> Invitations </a>'; ?></li>
<?php }} ?>
  </ul>
 </div> 
</div>

<div id="global3">
<ul id="parametres3">
         <?php if(isset($_SESSION['id'])){

            if($admin['id_admin']==1){ ?>
                <li><form class ="form3" method="post" action=""><input class = "bouton2" type="submit" name = "supprimer2" value="Supprimer"/></form></li>
            <?php } ?>

          <?php if($createur['membre_id']==$_SESSION['id']) { ?>
	               <li><form class ="form3" method="post" action="index.php?page=ParametresSallecontrolleur<?='&id='.$_SESSION['salleID'].''?>"><input class = "bouton3" type="submit" value="Paramètres" /></form></li>
          <?php }else{ ?><li><form class ="form3" method="post" action="index.php?page=formulaireconcertcontrolleur&invite=salle&new=new<?='&id='.$_SESSION['salleID']?>"><input class = "bouton3" type="submit" name = "inviter" value="Inviter"/></form></li>
        <?php }} ?>
         <?php if(isset($_SESSION['id'])){        
             if($createur['membre_id']!=$_SESSION['id']) {     
                 if (isset($follower)){
                  if($follower==true) {?>
                  	 <li><form class ="form3" method="post" action="index.php?page=pageSallecontrolleur<?='&id='.$_SESSION['salleID'].''?>"><input class = "bouton3" type="submit" name = "suivre" value="Suivre"/></form></li>
                  <?php }else{ ?><li><form class ="form3" method="post" action="index.php?page=pageSallecontrolleur<?='&id='.$_SESSION['salleID'].''?>"><input class = "bouton3" type="submit" name = "stop" value="Ne plus suivre"/></form></li>
        <?php }}}} ?>
         
</ul>
</div>



<div id="contenuSalle">
  <div id="textSalle">
    <?php  if($ongletSalle==1){ ?> 
      	<div class = "description"> 
          <div class="bloc1">
	      	<ul>
            <li>
              <div><span class = "infos">Adresse : </span><br><span class="dec"><?= $donnees['adresse'] ?></span></div>      
            </li>
            <li>
              <div><span class = "infos">Ville : </span><br><span class="dec"><?= $donnees['ville'] ?></span></div>         
            </li>       
            <li>
              <div><span class = "infos">Code postal : </span><br><span class="dec"><?= $donnees['code_postal'] ?></span></div>       
            </li>
          </ul> </div>
          <div class="bloc2">
          <ul>
            <li>
              <div><span class = "infos">Téléphone : </span><br><span class="dec"><?= $donnees['telephone'] ?></span></div>          
            </li>     
            <li>
              <div><span class = "infos">Type : </span><br><span class="dec"><?= $donnees['type'] ?></span></div>          
            </li> 
            <li>
              <div><span class = "infos">Capacité : </span><br><span class="dec"><?= $donnees['capacite'] ?></span></div>          
            </li> 
          <ul>               </div>                    
          
           
        <div class="map">
            <iframe
            width="600"
            height="350"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCTQZ5rKhEnDfS2LJiU-hmV-DuCWpql02k
            &q=<?php echo ($donnees['adresse']); ?>+<?php echo ($donnees['code_postal']); ?>">
          </div>
  		</div>
    <?php } ?> 

    <?php  if($ongletSalle==2){ ?> 
      <div class = "concerts">
        Concerts passés : 
        <?php foreach ($concertsalle as $eventsP) {
              echo ' <li><a href = "index.php?page=pageconcertcontrolleur&id='.$eventsP["concert_id"].'">'. $eventsP["nom"].'</a></li>';
        } ?>
        <br>  

        Concerts à venir : 
        <?php foreach ($concertsalle2 as $eventsF) {
              echo ' <li><a href = "index.php?page=pageconcertcontrolleur&id='.$eventsF["concert_id"].'">'. $eventsF["nom"].'</a></li>';
        } ?>        
      </div>
    <?php } ?>


    <?php  if($ongletSalle==4){ ?> 
      <?php if(isset($_SESSION['id'])) { ?>
        <?php if ($createur['membre_id']!= $_SESSION['id']) { ?>
          <div id="AVIS">
              <span class="intro">Clique sur le nombre d'étoiles que tu désires et laisse un commentaire pour noter cette salle !</span>
              <div class="rating rating2">
                <?php echo '<a href = "index.php?page=pageSallecontrolleur&id='.$_SESSION['salleID'].'&ongletSalle=4&note=5 #contenuSalle"> ★ </a>'; ?>
                <?php echo '<a href = "index.php?page=pageSallecontrolleur&id='.$_SESSION['salleID'].'&ongletSalle=4&note=4 #contenuSalle"> ★ </a>'; ?>
                <?php echo '<a href = "index.php?page=pageSallecontrolleur&id='.$_SESSION['salleID'].'&ongletSalle=4&note=3 #contenuSalle"> ★ </a>'; ?>
                <?php echo '<a href = "index.php?page=pageSallecontrolleur&id='.$_SESSION['salleID'].'&ongletSalle=4&note=2 #contenuSalle"> ★ </a>'; ?>
                <?php echo '<a href = "index.php?page=pageSallecontrolleur&id='.$_SESSION['salleID'].'&ongletSalle=4&note=1 #contenuSalle"> ★ </a>'; ?>
             </div>
              <div class="taperText">
                  <form method="post" action="#">
                      <label for="contenu"></label><br><textarea name="contenu" id="message" cols="50" rows="3"></textarea> <br>
                      <input type="submit" value="Envoyer" />
                 </form>
              </div>
         <?php }elseif($createur['membre_id']== $_SESSION['id']){ ?>  
                 <span class="autorisation">Vous ne pouvez pas donner d'avis sur votre propre page</span>
        <?php } ?>                                  
      <?php }else { ?>
                <span class="autorisation">Pour donner un avis sur une salle, merci de créer un compte sur Tune in Town</span>    
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

        </div>
    <?php } ?>   

    <?php  if($ongletSalle==5){ ?> 
      <div class = "photos"> photos</div>
    <?php } ?> 

    <?php  if($ongletSalle==6){ ?> 
      <div class = "invitations"> <?php if (isset($notif)){
             if($notif==true) {?>
             <div>tu as une notif
                  <?php foreach ($concert as $listeconcert) {
                      $artisteNom = recuperer2($listeconcert['artiste_id']); 
                    echo ' <li><a href = "index.php?page=modifierconcertcontrolleur&id='.$listeconcert["concert_id"].'">'. $listeconcert["nom"].''.' </a>Proposé par : <a href = "index.php?page=pageartistecontrolleur&id='.$listeconcert["artiste_id"].'">'. $artisteNom["nom"].'<br/>'.' </li></a>';
                  } ?>
             </div>
             <?php }else{ ?>
             <div>aucune notif</div>
        <?php }} ?> 
        
      </div>
    <?php } ?> 



  </div>
</div>

