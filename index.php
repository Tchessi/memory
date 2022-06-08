<!DOCTYPE html>
<html lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0' />
	<meta name="description" content="Ceci un jeu de memoire ">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>Color Memory</title>
</head>

<body>
	<div class="container">
		<h1 class="gameName">Le jeu de Mémoire </h1>
		<div class="blockLeft">
			<div class="cardCont" id="cardCont">
				<?php
				for ($x = 0; $x < 4; $x++) {
					for ($y = 0; $y < 4; $y++) {
						echo '<div class="cell closed" 
						data-color=""
						id="' . $x . $y . '"></div>';
					}
				}

				?>

			</div>

		</div>
		<div class="blockRight">
			<img src="img/logo.png" class="logo">
			<p class="scoreCard">Score : <span id="score" class="score"></span></p>
			<p>Logique de score: +2 pour la bonne sélection et -1 pour les mauvaises. Par défaut le score est de: 100.</p>
			<p class="button"><input type="button" value="Reset" id='reset' class="myButton reset"></p>

			<input type="button" value="complete" class="myButton " style="display:none;" onClick="javascript:complete();">


		</div>
	</div>
	<div class="submitForm">
		<form type="" method="POST" id="submitScoreForm" action="form.php">
			<img src="img/confetti.webp" width="150" height="150" alt="">
			<h2>Bravo!<br />vous avez un score de:<span class="score"></span></h2>
			<p>Envoyez votre score</p>
			<p><input type="text" name="fullname" placeholder="Votre Nom"></p>

			<p><input type="email" name="email" placeholder="Votre Email"></p>
			<input type="hidden" name="score" id="scoreVal" value="">
			<input type="hidden" name="appid" value="memory-game">
			<p class="button"><input type="submit" value="Envoyer" id="submitScore" class="myButton">
				<input type="button" value="Reset" class="resetForm myButton">
			</p>

			</p>

	</div>
	<div class="submitFormResponse "></div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="script.js"></script>

</body>

</html>