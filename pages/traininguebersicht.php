<!DOCTYPE html>
<html lang="de">
<?php
include("verify_logged_in.php");
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
	<main>
		<div class="overview">
			<a class="information">Dauer • Anzahl Trainings</a>
			<?php
			include("datenbank.php");
			$area = $_GET["area"];
			$typ = $_GET["typ"];
			$intensitaet = $_GET["intensitaet"];

			$result = look_up_training($area, $typ);
			echo "<ul>";
			foreach($result as $uebung){
				echo "<li><a>" . $uebung["name"] . "</a></li>";
			}
			echo "</ul>";
			echo "<a class=\"button\" href=\"training.php?area=" . $area . "&typ=" . $typ ."&intensitaet=" . $intensitaet . "\">Training beginnen</a>";
			?>
		</div>
	</main>
	<footer>
		<a href="impressum.php">Impressum</a>
		<p>Autoren: Damian Bühler, Patrick Höscheler, Shota Takahira</p>
	</footer>
	 <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>