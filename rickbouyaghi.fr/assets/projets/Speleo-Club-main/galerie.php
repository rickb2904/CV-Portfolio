<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Spéléo-club de Chauvigny</title>
	<link rel="stylesheet" type="text/css" href="./css/global.css" />
	<link rel="stylesheet" type="text/css" href="./css/galerie.css" />
</head>
<body>
	
	<!-- Zone titre -->
	<?php
		include 'bloc_titre.html';
	?>
	
	<!-- Zone menu + article -->
	<div id="bloc_article">
	<?php
		include('bloc_menu.html');
	?>
	
	
	<!-- Zone galerie -->
		<article>
			<h2>Galerie de photos</h2>
			<div class="photo">
				<div><img src="images/galerie_photo1.jpg" /></div>
				<p>Dans la rivière</p>
			</div>
			<div class="photo">
				<div><img src="images/galerie_photo3.jpg" /></div>
				<p>Opposition</p>
			</div>
			<div class="photo">
				<div><img src="images/galerie_photo2.jpg" /></div>
				<p>Porche de la grotte des Sio</p>
			</div>
			<div class="photo">
				<div><img src="images/galerie_photo4.jpg" /></div>
				<p>Concrétions</p>
			</div>
		</article>
		
		
		
	</div>
	
	<!-- Zone Pied de page -->
	<?php
		include('bloc_pied.html');
	?>

</body>
</html>
