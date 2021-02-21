<!DOCTYPE html>
<html lang="de">
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
			echo "<li>" . $uebung["name"] . "</li>";
		}
		echo "</ul>";
		echo "<a class=\"button\" href=\"training.php?area=" . $area . "&typ=" . $typ ."&intensitaet=" . $intensitaet . "\">Training beginnen</a>";
		?>
	</div>
	 <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>