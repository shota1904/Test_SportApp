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
		$area = $_GET["area"];
		$typ = $_GET["typ"];
		$intensitaet = $_GET["intensitaet"];
		$result = look_up_training($area, $typ);
		if (isset($_GET["index"])){
			$index = $_GET["index"];
		} else {
			$index = 0;
		}
		
		echo $result[$index]["beschreibung"];
		if ($index+1 > count($result)){
			header ("location:home.php");
		} else {
			echo "<button onclick=\"location.href='?area=" . $area . "&typ=" . $typ ."&intensitaet=" . $intensitaet . "&index=" . $index+1 ."'\">Nächste Übung</button>";
		}
	?>
	</main>
	<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>