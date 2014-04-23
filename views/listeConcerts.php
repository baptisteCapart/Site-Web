
<?php include("views/banniere.php"); ?>

<div id="blocpage">
  <div id="listeConcert">

    <span class = "titreconcerts"> Concerts </span>

    <ul>
        <li class = "<?php if($critereConcert==1){ echo "critereConcertactif";}?>"> <?php echo'<a href = "index.php?page=listeConcertscontrolleur&critereConcert=1"> Par Date</a>'; ?>
    	  </li>

        <li class = "<?php if($critereConcert==2){ echo "critereConcertactif";}?>"><?php echo '<a href = "index.php?page=listeConcertscontrolleur&critereConcert=2"> Par Lieu  </a>'; ?>
        </li>
    </ul>
  </div> 



  <div id="contenuliste">
       <?php  if($critereConcert==1){ ?> 
        <div> Liste des concerts classées par date </div>
      <?php } ?>

       <?php  if($critereConcert==2){ ?> 
        <div> Liste des concerts classées par lieu</div>
      <?php } ?>
      	
  </div> 
</div>
		
<?php include("views/footer.php"); ?>