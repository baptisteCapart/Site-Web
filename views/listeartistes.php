
<?php include("banniere.php"); ?>
	<div id="listeartiste">
		<ul>
			<li class = "paralpha">Par ordre alphabétique </br>

			<div class="contenuliste">
			<?php
				foreach ($listegroupe as $group) {
					echo '<a href = "pageartistecontrolleur.php?id='.$group["artiste_id"].'">'. $group["nom"].'<br/>'.' </a>';
				}
			?>
			</div></li>

			<li class = "parstyle">Par style</br>
			<div class="contenuliste">bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</div></li>	
		</ul> 	

	</div>
		
<?php include("footer.php"); ?>
