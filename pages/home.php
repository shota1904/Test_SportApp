<!DOCTYPE html>
<html lang="de">
<?php
require("verify_logged_in.php");
verify_logged_in();
?>
<head>
	<meta charset="UTF-8">
	<title>Trainingstyp Auswahl</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
		<!-- KSH-logo als Banner -->
		<div id="banner">
			<a>
				<img class="logo" src="../pictures/ksh_logo.png" alt="ksh_logo">
			</a>
		</div>
		<!-- Navigationsleiste -->
		<input type="checkbox" id="check">
		<label for="check">
			<i id ="btn"><img src="../pictures/icon_menu.png"></i>
			<i id ="cancel"><img src="../pictures/icon_cancel.png"></i>
		</label>
		<div class="sidebar">
		  <header>Menü</header>
			<ul>
				<li><a class="active" href="home.php">Trainingsplan</a></li>
				<li><a href="history.php">History</a></li>
				<li><a href="impressum.php">Impressum</a></li>
				<li><a href="logout.php">Abmelden</a></li>
			</ul>
		</div>
	<main>
		<!-- Auswahl Trainingsart -->
		<div class="selection">
			<div class="caption">
				<h1>Trainingsplan auswählen</h1>
			</div>
			<ul>
				<li><a class="button" href="krafttraining.php">Kraft</a></li>
				<li><a class="button" href="ausdauertraining.html">Ausdauer</a></li>
				<li><a class="button" href="mobilitaetstraining.php">Mobilität</a></li>
				<li><a class="button" href="traininguebersicht.php?area=sand&typ=sand&intensitaet=mittel">Sand</a></li>
			</ul>
		</div>
	</main>
	<footer>
		<a href="impressum.php">Impressum</a>
		<p>Autoren: Damian Bühler, Patrick Höscheler, Shota Takahira</p>
	</footer>
</body>	
</html>
