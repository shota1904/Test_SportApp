<!DOCTYPE html>
<html lang="de">
<?php
require("verify_logged_in.php");
verify_logged_in();
?>
<head>
	<meta charset="UTF-8">
	<title>Krafttraining</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<!-- KSH-logo als Banner -->
	<div id="banner">
		<a>
			<img class="logo" src="../pictures/ksh_logo.png" alt="ksh_logo">
		</a>
	</div>
	<!-- Zurück-Button -->
	<button onclick="goBack()" class="back"><img src="../pictures/icon_back.png"></button>
	<!-- Auswahl Muskelgruppe -->
	<main>
		<div class="selection">
			<div class="caption">
				<h1>Bereich auswählen</h1>
			</div>
			<ul>
				<li><a href="intensitaet.php?typ=kraft&area=bauchmuskeln">Bauchmuskeln</a></li>
				<li><a href="intensitaet.php?typ=kraft&area=brust">Brust</a></li>
				<li><a href="intensitaet.php?typ=kraft&area=arm">Arm</a></li>
				<li><a href="intensitaet.php?typ=kraft&area=bein">Bein</a></li>
				<li><a href="intensitaet.php?typ=kraft&area=schultern_ruecken">Schultern & Rücken</a></li>
			</ul>
		</div>
	</main>
	<footer>
		<a href="impressum.php">Impressum</a>
		<p>Autoren: Damian Bühler, Patrick Höscheler, Shota Takahira</p>
	</footer>
	<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
