
<div id="bloc">

		<div id="formulaire">
		<form class ="form2" enctype = "multipart/form-data"  method="post" action="<?php if($invite=='artiste'){ echo'index.php?page=formulaireconcertcontrolleur&new=new&invite=artiste&id='.$_SESSION['artisteID']; 
		}else{echo'index.php?page=formulaireconcertcontrolleur&new=new&invite=salle&id='.$_SESSION['salleID'];} ?>">
			
			<ul>
				<li>
					<div><span>Nom :</span>
					<input class = "textbox" type="text" name="nom"></div>
				</li>
				<li>
					<div><span>Date :</span>
					<input class = "textbox" type="date" name="jour"></div>
				</li>
				<li>
					<div><span>Heure de début :</span>
					<input class = "textbox" type="time" name="début"></div>
				</li>
				<li>
					<div><span>Durée :</span>
					<input class = "textbox"type="time" name="duree"></div>
				</li>
				<li>
					<div><span>Description :
					<TEXTAREA name="description" rows=10 COLS=40></TEXTAREA></div>
				</li>
				<li>
					<div><span>Message :
					<TEXTAREA name="message" rows=10 COLS=40></TEXTAREA></div>
				<li>
					<div><span>Photo de couverture :</span>
					<input type="file" name="photocover"></div>
				</li>
				<li><input class = "envoyer" type="submit"></input></li>
			</ul>
			
			
		</form>
		</div>
</div>
