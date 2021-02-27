<!DOCTYPE html>
<html lang="de">
<?php
include("verify_logged_in.php");
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
			<li><a href="home.php">Trainingsplan</a></li>
			<li><a href="history.php">History</a></li>
			<li><a class="active" href="impressum.html">Impressum</a></li>
			<li><a href="logout.php">Abmelden</a></li>
		</ul>
	</div>
	<main>
		<h1>Admin</h1>
		<p>Diese Applikation ist nur für die Schüler der Kantonsschule Hottingen verfügbar.</p>
		<p>Autoren: Damian Bühler, Patrick Höscheler, Shota Takahira</p>
	</main>
	<footer>
		<p>Autoren: Damian Bühler, Patrick Höscheler, Shota Takahira</p>
	</footer>
</body>
</html>