<!DOCTYPE html>
<html lang="de">
<?php
require("verify_logged_in.php");
verify_logged_in();
?>
<head>
	<meta charset="UTF-8">
	<title>Verlauf</title>
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
			<li><a class="active" href="history.php">History</a></li>
			<li><a href="impressum.php">Impressum</a></li>
			<li><a href="logout.php">Abmelden</a></li>
		</ul>
	</div>
	<main>
		<h1>History</h1>
		<div class="overview">
			<?php
			include("datenbank.php");

			$result = look_up_history();
			echo "<ul>";
			foreach($result as $uebung){
				echo "<li><a>" . $uebung["datum"] . "<br>" . look_up_uebung($uebung["uebungen_fk"])["name"] . ": " . $uebung["intensitaet"] . "</a></li>";
			}
			echo "</ul>";
			?>
		</div>
	</main>
	<footer>
		<a href="impressum.php">Impressum</a></br>
		<p>Damian Bühler, Patrick Höscheler, Shota Takahira</p>
	</footer>
</body>
</html>