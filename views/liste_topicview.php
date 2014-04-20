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
	   	<tr>
 	       <td> <?php echo '<a href = "index.php?page=discusscontroleur&topic='.$topic["id_topic"].'">'. $topic["nom"].'<br/>'.' </a>';?></td>
 	       <td><?php echo '<a href = "index.php?page=discusscontroleur&topic='.$topic["id_topic"].'">'. $topic["description"].'<br/>'.' </a>';?></td>
 	       <td><?php echo '<a href = "index.php?page=discusscontroleur&topic='.$topic["id_topic"].'">'. $topic["nombre_message"].'<br/>'.' </a>';?></td>
 	       <td><?php echo '<a href = "index.php?page=discusscontroleur&topic='.$topic["id_topic"].'">'. $createur_pseudo.'<br/>'.' </a>';?></td>
 	   </tr>
 <?php }  ?>

	</table>


		<?php  if($_SESSION['pseudo'] != ""){ ?>
			<div class="nouveau"><a href="index.php?page=new_topiccontroleur">Ton propre topic, c'est ici !</a></div>
		<?php }else{ ?>
			<div class="nouveau"><a href="index.php?page=formulairecontrolleur">Pour créer ton propre topic, il suffit de t'inscrire ici</a></div>
		<?php } ?>	
</div>
