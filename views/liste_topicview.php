<div class="generaldiscuss">
	<h1>Général</h1>

	<div id= "listediscuss">
		<ul class="discussions">
			<?php foreach ($topicList as $topic)
			{echo ' <li><a href = "index.php?page=discusscontroleur&id='.$topic["id_topic"].'">'. $topic["nom"].'<br/>'.' </a></li>';}?>
		</ul>
	</div>

	<div class="nouveau"><a href="index.php?page=new_topiccontroleur">Ton propre topic, c'est ici !</a></div>
</div>
