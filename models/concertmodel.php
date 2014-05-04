<?php 



function insertConcert($nom, $date ,$description, $début, $durée, $message, $photocover, $topic_id, $salle_id, $artiste_id)
{
	global $bdd;
	$bdd->query("INSERT INTO concert(nom, 'date', heure, durée, description, message, salle_id, artiste_id, photocover, topic_id) 
		VALUES ('$nom', '$date', '$heure', '$durée', '$description', '$message', '$salle_id', '$artiste_id', '$photocover', '$topic_id')");
}

function updateConcert($nom, $date ,$description, $début, $durée, $message, $photocover, $id)
{
	global $bdd;

	$bdd->query("UPDATE concert 
		SET nom='$nom',
			'date'='$date',
			heure='$heure',
			durée='$durée',
			description=$description,
			message= '$message',
			photocover='$photocover'

		WHERE concert_id='$id'");
}
 ?>