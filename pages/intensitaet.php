<!DOCTYPE html>
<?php
require("verify_logged_in.php");
verify_logged_in();
?>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>Intensität</title>
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
	<!-- Auswahl Intensität -->
	<div class="selection">
		<h1>Intensität auswählen</h1>
		<ul>
			<?php
			$area = $_GET["area"];
			$typ = $_GET["typ"];
				
			echo "<li><a href=\"traininguebersicht.php?typ=" . $typ . "&intensitaet=leicht&area=" . $area . "\">Leicht</a></li>";
			echo "<li><a href=\"traininguebersicht.php?typ=" . $typ . "&intensitaet=mittel&area=" . $area . "\">Mittel</a></li>";
			echo "<li><a href=\"traininguebersicht.php?typ=" . $typ . "&intensitaet=schwer&area=" . $area . "\">Schwer</a></li>";
			
			?>
		</ul>
	</div>
	<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
