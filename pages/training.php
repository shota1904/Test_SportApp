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
	<main>
	<?php
		include("datenbank.php");
		//nimmt Informationen des Users auf, was ausgewählt wurde
		$area = $_GET["area"];
		$typ = $_GET["typ"];
		$intensitaet = $_GET["intensitaet"];
		$intensitaet_str = "intensitaet_" . $intensitaet;
		//ruft Funktion auf, welche die Übungen zurückgibt
		$result = look_up_training($area, $typ);
		//setzt einen Index, falls es "null" ist
		if (isset($_GET["index"])){
			$index = $_GET["index"];
		} else {
			$index = 0;
		}
		//HTML-Code, welcher in der Datenbank unter Beschreibung gespeichert ist, wird ausgegeben
		echo "<div class=\"center\"><h1> " . $result[$index]["name"] . "</h1></div>";
		echo $result[$index]["beschreibung"];
		if ($result[$index]["zeit"] == 1){
			if ($result[$index][$intensitaet_str] == 30){
				echo "<div class=\"timer\"> <span id=\"time\">00:30</span> <button onclick=\"thirtySecondsTimer(); this.disabled=true;\" id=\"startTimer\">Starten</button> </div>";
			} else if ($result[$index][$intensitaet_str] == 20){
				echo "<div class=\"timer\"> <span id=\"time\">00:20</span> <button onclick=\"twentySecondsTimer(); this.disabled=true;\" id=\"startTimer\">Starten</button> </div>";
			} else if ($result[$index][$intensitaet_str] == 60){
				echo "<div class=\"timer\"> <span id=\"time\">01:00</span> <button onclick=\"sixtySecondsTimer(); this.disabled=true;\" id=\"startTimer\">Starten</button> </div>";
			}			
			else {
				echo "<div class=\"amount_exercise\"> <p id=\"amount\">" . $result[$index][$intensitaet_str] . "s</p> </div>";
			}
		} else{
			echo "<div class=\"amount_exercise\"> <p id=\"amount\">" . $result[$index][$intensitaet_str] . "x</p> </div>";
		}
		//Wenn es keine weiteren Übungen mehr hat wird das Training beendet
		if ($index+1 > count($result)){
			header ("location:training_beendet.php?area=" . $area . "&typ=" . $typ ."&intensitaet=" . $intensitaet);
		} else {
			//Knopf der zur nächsten Übung führt wird ausgegeben
			echo "<div class=\"center\"> <button class=\"nextExercise\" onclick=\"location.href='?area=" . $area . "&typ=" . $typ ."&intensitaet=" . $intensitaet . "&index=" . $index+1 ."'\">Nächste Übung</button> </div>";
		}
	?>
	</main>
	<footer>
		<p>Autoren: Damian Bühler, Patrick Höscheler, Shota Takahira</p>
	</footer>
	<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>