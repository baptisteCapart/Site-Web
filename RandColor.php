<?php 
function coul_aleat(){
 $couleur = array('#96F10E','#07CDCD','#D8551D','#EF3858','#843DFA','#F411E3','#EFA50A','#47993E');
$valeur = rand(0, 6);
return $couleur[$valeur];}
?>