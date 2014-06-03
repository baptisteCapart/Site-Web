<div class="generaldiscuss">
	<div class="retour"><a href="index.php?page=forumcontrolleur">Retour aux catégories</a></div>
	<div id="titlegeneraldiscuss">
	<?php
		if ($categorie == 'Style_de_musique')
		{ echo "Style de musique"; }
		else
		{ echo $categorie; }
	?>
	</div>

	<table>
		<tr>
	       <th>Nom</th>
	       <th>Description</th>
	       <th>Nombre de messages</th>
	       <th>Créé par</th>
   		</tr>

<?php
if (isset ($topicList))
{
 while($topic = $topicList->fetch()) {
	   $createur_pseudo = membername($topic["membre_id"]); ?>
	   	<tr>

 	       <td> <?php echo '<a href = "index.php?page=discusscontroleur&topic='.$topic["id_topic"].'">'. $topic["nom"].'<br/>'.' </a>';?></td>
 	       <td><?php echo '<a href = "index.php?page=discusscontroleur&topic='.$topic["id_topic"].'">'. $topic["description"].'<br/>'.' </a>';?></td>
 	       <td><?php echo '<a href = "index.php?page=discusscontroleur&topic='.$topic["id_topic"].'">'. $topic["nombre_message"].'<br/>'.' </a>';?></td>
 	       <td><?php echo '<a href = "index.php?page=discusscontroleur&topic='.$topic["id_topic"].'">'. $createur_pseudo.'<br/>'.' </a>';?></td>

 	   </tr>
 	   <?php if($admin['id_admin']==1) ?> { 
                 <form class ="deletebutton" method="" action=""><a class = "bouton4" type="submit" name = "supprimer4" value=""/></form>
                 					<input class = "logg" type="submit" value="Log in"/>

             } 
 <?php } } ?>

	</table>


		<?php  if(isset($_SESSION['pseudo'])){
			 if($_SESSION['pseudo'] != ""){ ?>
			<div class="nouveau"><?php echo '<a href = "index.php?page=new_topiccontroleur&categorie='.$categorie.'">Pour créer ton topic clique ici</a>';?></div>
		<?php }else{ ?>
			<div class="nouveau"><a href="index.php?page=formulairecontrolleur">Pour créer ton propre topic, il suffit de t'inscrire ici</a></div>
		<?php }} ?>	
</div>
