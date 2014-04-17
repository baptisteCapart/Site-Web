<div class="generaldiscuss">
	<h2>Général</h2>


	<table>
		<tr>
	       <th>Nom</th>
	       <th>Description</th>
	       <th>nombre de messages</th>
	       <th>Crée par</th>
   		</tr>

<?php  while($topic = $topicList->fetch()) { ?>
	   	<tr>
	       <td> <?php echo '<a href = "index.php?page=discusscontroleur&topic='.$topic["id_topic"].'">'. $topic["nom"].'<br/>'.' </a>';?></td>
	       <td><?php echo '<a href = "index.php?page=discusscontroleur&topic='.$topic["id_topic"].'">'. $topic["description"].'<br/>'.' </a>';?></td>
	       <td>3</td>
	       <td>Xavier</td>
	   </tr>
	   <?php }  ?>

	</table>


	<div class="nouveau"><a href="index.php?page=new_topiccontroleur">Ton propre topic, c'est ici !</a></div>
</div>
