
<div id = "photoartiste" style="background-image:url(<?php echo 'controlleurs/images/'.$donnees['photocover']; ?>); ">
    <div id="nomartiste">
        <?= $donnees["nom"] ?>
<!--         <?= $NbAbonnes["Nb"] ?>
 -->    </div>
    <div id="menuArtiste">
        <ul class = "page">
          <li class = "<?php if($onglet==1){ echo "active";}?>"> <?php echo'<a href = "index.php?page=pageartistecontrolleur&id='.$_SESSION['artisteID'].'&onglet=1 #contenuArtiste"> Présentation </a>'; ?></li>
          <li class = "<?php if($onglet==2){ echo "active";}?>"><?php echo '<a href = "index.php?page=pageartistecontrolleur&id='.$_SESSION['artisteID'].'&onglet=2 #contenuArtiste"> Concerts </a>'; ?></li>
          <li class = "<?php if($onglet==3){ echo "active";}?>"><?php echo '<a href = "index.php?page=pageartistecontrolleur&id='.$_SESSION['artisteID'].'&onglet=3 #contenuArtiste"> Extraits </a>'; ?></li>
          <li class = "<?php if($onglet==4){ echo "active";}?>"><?php echo '<a href = "index.php?page=pageartistecontrolleur&id='.$_SESSION['artisteID'].'&onglet=4 #contenuArtiste"> Avis </a>'; ?></li>
          <li class = "<?php if($onglet==5){ echo "active";}?>"><?php echo '<a href = "index.php?page=pageartistecontrolleur&id='.$_SESSION['artisteID'].'&onglet=5 #contenuArtiste"> Photos </a>'; ?></li>
          <?php if(isset($_SESSION['id'])){
           if($createur['membre_id']==$_SESSION['id']) { ?> 
          <li class = "<?php if($onglet==6){ echo "active";}?>"><?php echo '<a href = "index.php?page=pageartistecontrolleur&id='.$_SESSION['artisteID'].'&onglet=6 #contenuArtiste"> Invitations </a>'; ?></li>
        <?php }} ?>
        </ul>
    </div> 
</div>

  <div id="global2">
    <ul id="parametres2">
       <?php if(isset($_SESSION['id'])){
           if($createur['membre_id']==$_SESSION['id']) { ?>
                <li><form class ="form3" method="post" action="index.php?page=ParametresArtistecontrolleur<?='&id='.$_SESSION['artisteID'].''?>"><input class = "bouton2" type="submit" value="Paramètres" /></form></li>
                <?php }else{ ?><li><form class ="form3" method="post" action="index.php?page=formulaireconcertcontrolleur&invite=artiste&new=new<?='&id='.$_SESSION['artisteID']?>"><input class = "bouton2" type="submit" name = "inviter" value="Inviter"/></form></li>
                <?php }} ?>
       <?php if(isset($_SESSION['id'])){                
         if($createur['membre_id']!=$_SESSION['id']) {
           if (isset($follower)){
             if($follower==true) {?>
                  <li><form class ="form3" method="post" action="index.php?page=pageartistecontrolleur<?='&id='.$_SESSION['artisteID'].''?>"><input class = "bouton2" type="submit" name = "suivre" value="Suivre"/></form></li>
              <?php }else{ ?> <li><form class ="form3" method="post" action="index.php?page=pageartistecontrolleur<?='&id='.$_SESSION['artisteID'].''?>"><input class = "bouton2" type="submit" name = "stop" value="Ne plus suivre"/></form></li>
        <?php }}}} ?>
        
    </ul>
  </div>



<div id="contenuArtiste">
  <div id="textArtist">
    <?php  if($onglet==1){ ?> 
      <div class = "descrption"> <?= $donnees["description"] ?></div>
    <?php } ?> 

    <?php  if($onglet==2){ ?> 
      <div class = "concerts">
        Concerts passés :  
          <?php foreach ($concertartiste as $eventaP) {
                    echo ' <li><a href = "index.php?page=pageconcertcontrolleur&id='.$eventaP["concert_id"].'">'. $eventaP["nom"].'</a></li>';
            } ?> <br>
        Concerts à venir :  
          <?php foreach ($concertartiste2 as $eventaF) {
                    echo ' <li><a href = "index.php?page=pageconcertcontrolleur&id='.$eventaF["concert_id"].'">'. $eventaF["nom"].'</a></li>';
            } ?>            

      </div>
    <?php } ?>

    <?php  if($onglet==3){ ?> 
      <div class = "extraits">
        <?php if(isset($_SESSION['id'])){ ?>   
          <ul>
          <?php foreach ($musiques as $music){  ?>
           <li>  <?php echo $music['nom']; ?> <br><audio  src="<?php echo $music['nom']; ?>"controls></audio></li>
          <?php 
          }
          ?>
          </ul>
         <?php }else{ ?>
         <span class="intro">Inscris-toi pour écouter les extraits !</span> 
         <?php } ?>
         <?php if(isset($_SESSION['id'])){
             if($createur['membre_id']==$_SESSION['id']) { ?>    
              <span class="intro">Tu peux ajouter ici 1 à 2 extaits de ton répertoire pour faire découvrir ta musique aux membre du site</span>       
                  <form class ="formulaireExtraits" method="post" action="<?php echo 'index.php?page=pageartistecontrolleur&id='.$_SESSION['artisteID'].'&onglet=3' ;?>">
                      <ul>
                          <li>
                              <div class="extrait"><span>Extrait de musique n°1 : </span><input class = "textbox" type="file" name="extrait1" /></div>
                          </li> 
                          <li>
                              <div class="extrait"><span>Extrait de musique n°2 : </span><input class = "textbox" type="file" name="extrait2" /></div>
                          </li>
                          <li>
                              <input class = "envoyer" type="submit" value="Envoyer !"/>
                          </li>              
                      </ul>
                  </form>
        <?php }} ?>              

      </div>
    <?php } ?> 

    <?php  if($onglet==4){ ?>
      <?php if(isset($_SESSION['id'])) { ?>
        <?php if ($createur['membre_id']!= $_SESSION['id']) { ?>
          <div id="AVIS">
              <span class="intro">Clique sur le nombre d'étoiles que tu désires et laisse un commentaire pour noter cet artiste !</span>
              <div class="rating rating2">
                <?php echo '<a href = "index.php?page=pageartistecontrolleur&id='.$_SESSION['artisteID'].'&onglet=4&note=5 #contenuArtiste"> ★ </a>'; ?>
                <?php echo '<a href = "index.php?page=pageartistecontrolleur&id='.$_SESSION['artisteID'].'&onglet=4&note=4 #contenuArtiste"> ★ </a>'; ?>
                <?php echo '<a href = "index.php?page=pageartistecontrolleur&id='.$_SESSION['artisteID'].'&onglet=4&note=3 #contenuArtiste"> ★ </a>'; ?>
                <?php echo '<a href = "index.php?page=pageartistecontrolleur&id='.$_SESSION['artisteID'].'&onglet=4&note=2 #contenuArtiste"> ★ </a>'; ?>
                <?php echo '<a href = "index.php?page=pageartistecontrolleur&id='.$_SESSION['artisteID'].'&onglet=4&note=1 #contenuArtiste"> ★ </a>'; ?>
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
                <span class="autorisation">Pour donner un avis sur un artiste, merci de créer un compte sur Tune in Town</span>    
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

    <?php  if($onglet==5){ ?> 
      <div class = "photos"> photos</div>
    <?php } ?>
    <?php if($onglet==6){ ?> 
      <div class = "invitations"> invitations
        <?php if (isset($notif)){
             if($notif==true) {?>
             <div>tu as une notif
                  <?php foreach ($concert as $listeconcert) {
                    $salleNom=recuperer3($listeconcert['salle_id']);
                    echo ' <li><a href = "index.php?page=modifierconcertcontrolleur&id='.$listeconcert["concert_id"].'">'. $listeconcert["nom"].' </a> Proposé par : <a href = "index.php?page=pageSallecontrolleur&id='.$listeconcert["salle_id"].'">'. $salleNom["nom"].'<br/>'.' </li></a>';
                  } ?>
             </div>
             <?php }else{ ?>
             <div>aucune notif</div>
        <?php }} ?> 
    <?php } ?>     
  </div>
</div>

