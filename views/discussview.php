<div class="discuss">    
    <h1> <?php $topic_name['nom'] ?> </h1>

    <div class="ajout">
    	<form method="post" action="#">
        	<label for="message">Ton utile contribution :</label><br><textarea name="message" id="message" cols="50" rows="3"></textarea>
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
				<span class="contenu">
					<?php 
					echo($post['contenu']);
					 ?>
				</span>
			</div>
    	<?php } ?>
    </div>
</div>