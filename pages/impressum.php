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
		<div class="admin">
			<h1 class="caption" style="color: #FFFFFF">Admin</h1>
			<div class="center_content">
				<div class="content">
					<h3>Urheberrecht</h3>
					<p>Alle von uns zur Verfügung gestellten Inhalte und Bilder auf dieser Website gehören der Kantonsschule Hottingen. Vervielfältigung, Veränderung, Verbreitung und jegliche Form der Verwertung außerhalb der Grenzen des Urheberrechtes sind untersagt. Das Herunterladen oder Kopieren dieser Seiten ist ausnahmslos nur für den privaten, nicht kommerziellen Gebrauch erlaubt.</p>
					<h3>Haftung</h3>
					<p>Die Ersteller dieser Website und die Kantonsschule Hottingen haftet für keinerlei Verletzungen, welche beim Ausüben dieser Übungen auftreten können. Der Konsument haftet für seine Taten allein.</p>
					<h3>Erstellung</h3>
					<p>Diese Website wurde von Damian Bühler, Patrick Höscheler und Shota Takahira für die Kantonsschule Hottingen gefertigt.</p>
					<p>Autoren: Damian Bühler, Patrick Höscheler, Shota Takahira</p>
				</div>
			</div>
		</div>
	</main>
	<footer>
		<p>Autoren: Damian Bühler, Patrick Höscheler, Shota Takahira</p>
	</footer>
</body>
</html>