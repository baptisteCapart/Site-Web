
  <?php include("views/banniere.php"); ?>
  <div id = "photoartiste" style="background-image:url(<?php echo 'controlleurs/images/'.$donnees['photocover']; ?>); ">
  <div id="nomartiste">
   <?= $donnees["nom"] ?>
  </div>
  </div>

  <div id="global2">
  <ul id="parametres2">
   <li><input class = "bouton2" type="submit" value="Paramètres" /></li>
   <li><input class = "bouton2" type="submit" value="Suivre"/></li>
  </ul>
  </div>

<div id="tabs">

  <ul>
    <li><a href="#tabs-1">Présentation</a></li>
    <li><a href="#tabs-2">Concerts</a></li>
    <li><a href="#tabs-3">Extraits</a></li>
    <li><a href="#tabs-4">Avis</a></li>
    <li><a href="#tabs-5">Photos</a></li>
  </ul>

  <div id="tabs-1"><?= $donnees["description"] ?> 
  </div>

  <div id = "tabs-2">

  </div>

  <div id = "tabs-3">

  </div>

  <div id = "tabs-4">
    <h1>Votre avis sur cet artiste.</h1>
    <h2>Note cet artiste !!</h2>
    <div class="rating rating2"><!--
      --><a href="#5" title="Give 5 stars">★</a><!--
      --><a href="#4" title="Give 4 stars">★</a><!--
      --><a href="#3" title="Give 3 stars">★</a><!--
      --><a href="#2" title="Give 2 stars">★</a><!--
    --><a href="#1" title="Give 1 star">★</a>
    </div>
  </div>
  <div id ="tabs-5">

  </div>
</div>


<?php include("views/footer.php"); ?>
