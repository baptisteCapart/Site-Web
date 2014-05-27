
<div id="bloc">

		<div id="bienvenue">Remplis gratuitement ce formulaire d'inscription pour créer ton groupe et ainsi bénéficier de tous les privilèges d'un groupe !</div>
		<div id="formulaire">
		<form class ="form2" method="post" action="index.php?page=formulairegroupecontrolleur">
			<ul>
				<li>
					<div class="nom_de_salle"><span>Nom du groupe : </span><input class = "textbox" type="text" name="nomartiste" value=""/></div>
					
				</li>
				<li>
					<div class="style"><span>Style de musique : </span> <br>
					<input class = "stylebox" type="checkbox"  name="style[]" value="Rock">Rock<br>
					<input class = "stylebox" type="checkbox"  name="style[]" value="blues">Blues<br>
					<input class = "stylebox" type="checkbox"  name="style[]" value="Jazz">Jazz<br>
					<input class = "stylebox" type="checkbox"  name="style[]" value="Rap">Rap<br>
					<input class = "stylebox" type="checkbox"  name="style[]" value="Musique Classique">Musique Classique<br>
					<input class = "stylebox" type="checkbox"  name="style[]" value="Soul">Soul<br>
					<input class = "stylebox" type="checkbox"  name="style[]" value="Electro">Electro<br>
					<input class = "stylebox" type="checkbox"  name="style[]" value="Métal">Métal<br>
					<input class = "stylebox" type="checkbox"  name="style[]" value="Disco">Disco<br>
					<input class = "stylebox" type="checkbox"  name="style[]" value="RnB">RnB<br>
					<input class = "stylebox" type="checkbox"  name="style[]" value="Pop Rock">Pop Rock<br>
					<input class = "stylebox" type="checkbox"  name="style[]" value="Pop">Pop<br>



					</div>			
				</li>
				<li>
					<div class="description"><span>Description : <TEXTAREA name="description" rows=10 COLS=40></TEXTAREA></div>			
				</li>				
				<li>
					<div class="photogroupe"><span>Photo du groupe : </span><input class = "textbox" type="file" name="photogroupe" /></div>
				</li>
								

				<li>
					<input class = "envoyer" type="submit" value="Envoyer !"/>
				</li>
			</ul>
			
			
		</form>
		</div>
</div>
