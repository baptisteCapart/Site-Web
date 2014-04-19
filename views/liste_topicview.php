<div class="generaldiscuss">
	<h2>Général</h2>


	<table>
		<tr>
	       <th>Nom</th>
	       <th>Description</th>
	       <th>Nombre de messages</th>
	       <th>Créé par</th>
   		</tr>

<?php while($topic = $topicList->fetch()) {
	   	$createur_pseudo = membername($topic["membre_id"]); ?>
	   	<?php echo('<a href = "index.php?page=discusscontroleur&topic='.$topic["id_topic"].'">');?>
	   		<tr>
	    	   <td><?php echo ($topic['nom']);?></td>
	    	   <td><?php echo ($topic['description']);?></td>
	    	   <td><?php echo ($topic['nombre_message']);?></td>
	    	   <td><?php echo ($createur_pseudo);?></td>
	   		</tr>
		</a>
	   <?php } ?>

	</table>


	<div class="nouveau"><a href="index.php?page=new_topiccontroleur">Ton propre topic, c'est ici !</a></div>
</div>
