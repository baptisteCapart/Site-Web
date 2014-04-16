<div class="generaldiscuss">
	<h2>Général</h2>

<!-- 	<div id= "listediscuss">
		<ul class="discussions">
			<?php foreach ($topicList as $topic)
			{echo ' <li><a href = "index.php?page=discusscontroleur&topic='.$topic["id_topic"].'">'. $topic["nom"].'<br/>'.' </a></li>';}?>
		</ul>
	</div> -->




	<table>
		<tr>
	       <th>Nom</th>
	       <th>Description</th>
	       <th>nombre de messages</th>
	       <th>Crée par</th>
   		</tr>

   		<?php foreach ($topicList as $topic) { var_dump($topic);?>
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
