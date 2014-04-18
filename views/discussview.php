<div class="discuss">    
    <h1> <?php $topic_name['nom'] ?> </h1>

    <form method="post" action="#">
        <p class="v1">
        	<label for="message">Message : </label><input type="text" name="message" id="message" /><br />
			<input type="submit" value="Envoyer" />
		</p>
    </form>

    <div class="fil">
    	<?php while ($post = $listepost->fetch()) { ?>
			<div class="post">
				<span class="auteur">
					<?php 
					$name = membername($post['membre_id']);
					echo($name.'<br>');
					 ?>
				</span>
				<span class="message">
					<?php 
					echo($post['contenu']);
					 ?>
				</span>
			</div>
    	<?php } ?>
    </div>
</div>