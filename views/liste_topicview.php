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

	<table class = "forum">
		<tr >
	       <th>Nom</th>
	       <th>Description</th>
	       <th>Nombre de messages</th>
	       <th>Créé par</th>
			<?php if(isset($_SESSION['id'])){

   				if($admin['id_admin']==1){ ?>
            		<th>Supprimer Topic</th>
            		<?php } } ?> 
   		</tr>

<?php
if (isset ($topicList))
{
 while($topic = $topicList->fetch()) {
	   $createur_pseudo = membername($topic["membre_id"]); ?>
	   	<tr>

 	       <td><?php echo '<a href = "index.php?page=discusscontroleur&topic='.$topic["id_topic"].'">'. $topic["nom"].'<br/>'.' </a>';?></td>
 	       <td><?php echo '<a href = "index.php?page=discusscontroleur&topic='.$topic["id_topic"].'">'. $topic["description"].'<br/>'.' </a>';?></td>
 	       <td><?php echo '<a href = "index.php?page=discusscontroleur&topic='.$topic["id_topic"].'">'. $topic["nombre_message"].'<br/>'.' </a>';?></td>
 	       <td><?php echo '<a href = "index.php?page=discusscontroleur&topic='.$topic["id_topic"].'">'. $createur_pseudo.'<br/>'.' </a>';?></td>
			<?php if($admin['id_admin']==1){ ?>
            		<th><form class ="form3" method="post" action="index.php?page=liste_topiccontrolleur<?='&id='.$topic['id_topic'].''?><?='&categorie='.$_GET['categorie'].''?>">
            			<input class = "bouton4" type="submit" name = "supprimer4" value="Supprimer"/>
            		</form>
            	</th>
            		<?php }  ?> 
 	   </tr>
 	 

             
 <?php  } }?>

	</table>


		<?php  if(isset($_SESSION['pseudo'])){
			 if($_SESSION['pseudo'] != ""){ ?>
			<div class="nouveau"><?php echo '<a href = "index.php?page=new_topiccontroleur&categorie='.$categorie.'">Pour créer ton topic clique ici</a>';?></div>
		<?php }else{ ?>
			<div class="nouveau"><a href="index.php?page=formulairecontrolleur">Pour créer ton propre topic, il suffit de t'inscrire ici</a></div>
		<?php }} ?>	
</div>
