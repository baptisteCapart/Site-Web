
<?php include("views/banniere.php"); ?>
<!-- 	<?php
	if(!isset($_GET['section']))
		{$_GET['section'] = "listealpha";}
	?> -->
	<div id="listeartiste">
		<ul>
			
			<li class = "paralpha"><a href="#?section=listealpha">Par ordre alphabétique </br></a>
				</li>

			<li class = "parstyle"><a href="#?section=listegenre">Par style</br></a></li>	
		
		</ul> 	


	</div>
	<div class = "contenuliste">			<?php
				foreach ($listegroupe as $group)
				{echo '<a href = "index.php?page=pageartistecontrolleur&id='.$group["artiste_id"].'">'. $group["nom"].'<br/>'.' </a>';}
			?></div>
<!-- 	<div class="blocs">
		
		<div class="listealpha" style="
			<?php 
			if($_GET['section']=="listealpha")
				{echo 'z-index : 50;';}
			else
				{echo  'z-index : 0;';}
			?>"
		> --> 

		<!-- </div>

		<div class="listegenre" style="
			<?php 
			if($_GET['section']=="listegenre")
				{echo 'z-index : 50;';}
			else
				{echo 'z-index : 0;';}
			?>"
		>
			Tout plein de genres de musiques différents !
		</div>

	</div> -->
		
<?php include("views/footer.php"); ?>