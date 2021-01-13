<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>Trainingstyp Auswahl</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div id="banner">
		<a>
			<img class="logo" src="../pictures/ksh_logo.png" alt="ksh_logo">
		</a>
		<h1 id="title">KSH Sport-App</h1>
	</div>
	<div id="login_userinput">
		<form id="login" method="post" action="login.php">
			<ul>
				<li><input type="text" name="Uname" id="Uname" placeholder="Username"></li>
				<li><input type="Password" name="Pass" id="Pass" placeholder="Password"></li>
				<li><input type="submit" name="log" id="log" value="Login" onClick="pasuser(this.form)"></li>
			</ul>
		</form>
	</div>
</body>
<?php
//Schaut welche Methode benutzt wird. In diesem Fall POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["Uname"];
	$pwd = $_POST["Pass"];
	//Überprüft ob das Feld Username oder das Feld Passwort leer sind
	if (!empty($name) || !empty($pwd)) {
		
		$connection = new mysqli("127.0.0.1", "php", "1234", "bruteforce"); //Verbindung zum SQL Server
		$t=time(); //Zeitdefinition
		$diff = (time() - 5256000); //"Delay" für die nächsten, das heisst logins werden für 5256000 Sekunden = 10 Jahre. Somit ist dieser User blockiert
		$ip = $_SERVER['REMOTE_ADDR']; //Client IP in $ip
		//Verbindung. Setzt Werte von $ip und $t in die Tabelle login_attempts
		mysqli_query($connection, "INSERT INTO `login_attempts` (`user` , `diff`) VALUES ('$ip' , $t)");	
		$result = mysqli_query($connection, "SELECT COUNT(*) FROM `login_attempts` WHERE `user` LIKE '$ip' AND diff \> $diff");		
		//Counter für die Anzahl Loginversuche
		$count = mysqli_fetch_array($result);
		//Wenn count > 3 Versuche dann
		if($count[0] > 3){
			echo "You have been blocked after 3 tries. Please contact us at loginpage@bzz.ch"; //Meldung wenn 3 Versuche 
		} else {
			//Wenn Username und Password richtig sind gelangt man auf die richtige Seite
			if ($name == "Admin" && $pwd == "snoopy") {
				header('Location: homee.html');
				die();
			}
		} 
	}
}
?>
<script>
var input = document.getElementById("Pass");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("log").click();
  }
});
</script>
<script>
var input = document.getElementById("Uname");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("log").click();
  }
});
</script>
</html>
