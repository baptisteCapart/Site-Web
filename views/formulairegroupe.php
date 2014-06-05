
<div id="bloc">

		<div id="bienvenue">Remplis gratuitement ce formulaire d'inscription pour créer ton groupe et ainsi bénéficier de tous les privilèges d'un groupe !</div>
		<div id="formulaire">
		<form enctype = "multipart/form-data" name = "formA"  class ="form2" method="post" action="index.php?page=formulairegroupecontrolleur">
			<ul>
				<li>
					<div class="nom_de_salle"><span>Nom du groupe : </span><input class = "textbox" type="text" name="nomartiste" value=""/></div>
					
				</li>
				<li>
					<div><span>Style de musique : </span> <br>


					<?php

					foreach ($AllStyles as $style) { ?>
					<input class = "stylebox" type="checkbox" name="style[]" value="<?=$style['nom']?>"><?=$style['nom']?><br>
										
					<?php
				}
					?>


					




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
							<?php if(isset($_SESSION['id'])){

            			if($admin['id_admin']==1){ ?>
						
						<div class="addstyle">
							<p>Ajouter style</p>
							<form  method="post" action="index.php?page=formulairegroupecontrolleur">
					<textarea name="message" rows="1" cols="10"></textarea><br />
            			<input type="submit" value="Envoyer" /></form>
            		</div>

					<?php } } ?>
		</div>
</div>
