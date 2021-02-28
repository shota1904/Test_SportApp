<!DOCTYPE html>
<html lang="de">
<?php
require("datenbank.php");
require("verify_logged_in.php");
verify_logged_in();
	
//nimmt Informationen des Users auf, was ausgewählt wurde
$area = $_GET["area"];
$typ = $_GET["typ"];
$intensitaet = $_GET["intensitaet"];
//ruft Funktion auf, welche die Übungen zurückgibt
$result = look_up_training($area, $typ);
	
//Übungen werden erst in die History eingetragen, da man das Training nicht abbrechen sollte
foreach ($result as $value)
    insert_history_record($intensitaet, $value["id"]);
?>
<head>
	<meta charset="UTF-8">
	<title>Training beendet</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<!-- KSH-logo als Banner -->
	<div id="banner">
		<a>
			<img class="logo" src="../pictures/ksh_logo.png" alt="ksh_logo">
		</a>
	</div>
	<main>
		<div class="finished">
			<div class="caption">
				<h1>Gratulation</h1>
				<h2>Das Training wurde erfolgreich beendet.</h2>
			</div>
			<div class="center">
				<button onclick="location.href='home.php'" id="finishedExercise">Zur Trainingsauswahl</button>
			</div>
		</div>
	</main>
	<footer>
		<a href="impressum.php">Impressum</a>
		<p>Autoren: Damian Bühler, Patrick Höscheler, Shota Takahira</p>
	</footer>
</body>
</html>