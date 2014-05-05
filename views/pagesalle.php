
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
           if($createur['membre_id']==$_SESSION['id']) { ?>
	               <li><form class ="form3" method="post" action="index.php?page=ParametresSallecontrolleur<?='&id='.$_SESSION['salleID'].''?>"><input class = "bouton3" type="submit" value="Paramètres" /></form></li>
        <?php }} ?>
         <?php if(isset($_SESSION['id'])){        
             if($createur['membre_id']!=$_SESSION['id']) {     
                 if (isset($follower)){
                  if($follower==true) {?>
                  	 <li><form class ="form3" method="post" action="index.php?page=pageSallecontrolleur<?='&id='.$_SESSION['salleID'].''?>"><input class = "bouton3" type="submit" name = "suivre" value="Suivre"/></form></li>
                 <li><form class ="form3" method="post" action="index.php?page=formulaireconcertcontrolleur&invite=salle&new=new<?='&id='.$_SESSION['salleID']?>"><input class = "bouton3" type="submit" name = "inviter" value="Inviter"/></form></li> 
        <?php }}}} ?>
</ul>
</div>



<div id="contenuSalle">
  <div id="textSalle">
    <?php  if($ongletSalle==1){ ?> 
      	<div class = "descrption"> 
	      	<ul>
		      	<li><?= $donnees['adresse'] ?></li>
		      	<li><?= $donnees['ville'] ?></li>
		      	<li><?= $donnees['code_postal'] ?></li>
	      	</ul>	
  		</div>
    <?php } ?> 

    <?php  if($ongletSalle==2){ ?> 
      <div class = "concerts"> concerts</div>
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
      <div class = "invitations"> invitations
        
      </div>
    <?php } ?> 



  </div>
</div>

