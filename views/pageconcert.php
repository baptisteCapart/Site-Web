	<?php include("views/banniere.php"); ?>
		<div id = "photoconcert">
			<!-- <div id="nomconcert">
		        CONCERT
		    </div> -->

		    <div id="menuConcert">
				  <ul class = "page">
				    <li class = "<?php if($ongletConcert==1){ echo "activeConcert";}?>"><?php echo'<a href = "index.php?page=pageconcertcontrolleur&ongletConcert=1 #contenuConcert"> Présentation </a>'; ?></li>
				    <li class = "<?php if($ongletConcert==2){ echo "activeConcert";}?>"><?php echo '<a href = "index.php?page=pageconcertcontrolleur&ongletConcert=2 #contenuConcert"> Photos </a>'; ?></li>
				    <li class = "<?php if($ongletConcert==4){ echo "activeConcert";}?>"><?php echo '<a href = "index.php?page=pageconcertcontrolleur&ongletConcert=4 #contenuConcert"> Avis </a>'; ?></li>
				  </ul>
 			</div> 

			<span class = "listegroupe" >
				<div><img  class = "hoverimg2" src="controlleurs/images/groupesalle.jpg" alt="participants">
					<div>
						<ul id="liste2"> <span class="groupespart">Ils s'y produisent : </span>
							<li>a</li>
							<li>b</li>
							<li>c</li>
							<li>d</li>
							<li>e</li>
							<li>f</li>
							<li>g</li>
							<li>h</li>
							<li>i</li>
							<li>j</li>
							<li>k</li>
							<li>l</li>
							<li>m</li>
							<li>n</li>
							<li>o</li>
							<li>p</li>
							<li>q</li>
							<li>r</li>
							<li>s</li>
							<li>t</li>
						</ul>
					</div>
				</div>
				
			</span>
			<span class = "listembr" >
				<div><img  class = "hoverimg" src="controlleurs/images/membre.jpg" alt="participants"> 
					<div>
						<ul id="liste"> <span class="membres">Ils y participent : </span>
							<li>a</li>
							<li>b</li>
							<li>c</li>
							<li>d</li>
							<li>e</li>
							<li>f</li>
							<li>g</li>
							<li>h</li>
							<li>i</li>
							<li>j</li>
							<li>k</li>
							<li>l</li>
							<li>m</li>
							<li>n</li>
							<li>o</li>
							<li>p</li>
							<li>q</li>
							<li>r</li>
							<li>s</li>
							<li>t</li>
						</ul>
					</div>
				</div>
				
			</span>
		</div>


<div id="global3">
<ul id="parametres3">
	<li><input class = "bouton3" type="submit" value="Paramètres" /></li>
	<li><input class = "bouton3" type="submit" value="Suivre"/></li>
</ul>
</div>



<div id="contenuConcert">
  <div id="textConcert">
    <?php  if($ongletConcert==1){ ?> 
      	<div class = "descrption"> 
	      	<ul>
		      	<li>adresse</li>
		      	<li>ville</li>
		      	<li>code postal</li>
	      	</ul>	
  		</div>
    <?php } ?> 

    <?php  if($ongletConcert==2){ ?> 
      <div class = "photos"> concerts</div>
    <?php } ?>


    <?php  if($ongletConcert==4){ ?> 
      <div class="rating rating2">
        <a href="#5" title="Give 5 stars">★</a>
        <a href="#4" title="Give 4 stars">★</a>
        <a href="#3" title="Give 3 stars">★</a>
        <a href="#2" title="Give 2 stars">★</a>
        <a href="#1" title="Give 1 star">★</a>
      </div>
    <?php } ?>   

  </div>
</div>
		
	<?php include("footer.php"); ?>