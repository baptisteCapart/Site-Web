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
				<div class="contenu">
					<?php 
					echo($post['contenu']);
					 ?>
				</div>
			</div> 
    	<?php } ?>
    </div>
</div>