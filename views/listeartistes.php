
<?php include("banniere.php"); ?>
	<div id="listeartiste">
		<ul>
			<li class = "paralpha">Par ordre alphabétique </br>

			<div class="contenuliste">
			<?php
				foreach ($listegroupe as $group) {
					echo $group["nom"].'<br/>';
				}
			?>
			</div></li>

			<li class = "parstyle">Par style</br>
			<div class="contenuliste">bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</div></li>	
		</ul> 	

	</div>
		
<?php include("footer.php"); ?>
