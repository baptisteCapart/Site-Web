
<div id="blocpage">
  <span class="membres">Membres : 
  	<span class="alpa">
  	<ul><?php 
 		if(isset($result0)){ 
 			foreach ($result0 as $membre){
  				echo ' <li><a href = "index.php?page=pageMembrecontrolleur&id='.$membre["membre_id"].'"> <img src="controlleurs/images/'.$membre['photoprofil'].'" alt="" /> '. $membre["pseudo"].'<br/>'.' </a></li>';
  			}
  		}else{
  			echo "$erreur";
  		}	
  		?>
  	</ul>
  </span></span><br>

  <span class="artistes">Artistes : 
  </span><br>

  <span class="salles">Salles : 
  </span><br>

  <span class="concerts">Concerts : 
  </span> <br>
  
</div>