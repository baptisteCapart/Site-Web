<div class="discuss">    
    <span class = "topicName"> <?= $topic_name['nom'] ?> </span>

    <div class="ajout">
    	<form method="post" action="#">
        	<label for="message">  :</label><br><textarea name="message" id="message" cols="150" rows="5"></textarea>
			<input type="submit" value="Envoyer" />
    	</form>
	</div>

    <div class="fil">
    	<?php while ($post = $listepost->fetch()) { ?>

			<div class="post">
				<span class="auteur">
					<?php 
					$name = membername($post['membre_id']);
					echo($name.' :<br>');
					 ?>
					</span>
					 
				</span>
				<div class="contenu">
					<?php 
					echo($post['contenu']);
					 ?>
				</div>
				<span class = "date">
					<?php 
					echo($post['datepost'].'<br>');
					 ?>


				<?php if(isset($_SESSION['id'])){
            if($admin['id_admin']==1){ ?>
                <li><form class ="form3" method="post" action="index.php?page=discusscontrolleur<?='&id='.$post['id_post'].''?>"><input class = "bouton2" type="submit" name = "supprimer" value="Supprimer"/></form></li>
            <?php } }?>

			</div> 
    	<?php } ?>
    </div>
</div>