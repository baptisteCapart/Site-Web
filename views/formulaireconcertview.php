
<div id="bloc">

		<div id="formulaire">
		<form class ="form2" method="post" action="index.php?page=formulaireconcertcontrolleur&new=new&invite=artiste<?='&id='.$_SESSION['artisteID']?>">
			<ul>
				<li>
					<span>Nom :</span>
					<input type="text" name="nom">
				</li>
				<li>
					<span>Date :</span>
					<input type="date" name="jour">
				</li>
				<li>
					<span>Heure de début :</span>
					<input type="time" name="début">
				</li>
				<li>
					<span>Durée :</span>
					<input type="time" name="duree">
				</li>
				<li>
					<span>Description :</span>
					<input type="text" name="description">
				</li>
				<li>
					<span>Message :</span>
					<input type="text" name="message">
				</li>
				<li>
					<span>Photo de couverture :</span>
					<input type="file" name="photocover">
				</li>
				<li><input type="submit">C'est parti</input></li>
			</ul>
			
			
		</form>
		</div>
</div>
