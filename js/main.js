//Funktion für den "back-Button"
function goBack(){
				window.history.back();
			}

//Funktion für den Timer
function startTimer(duration, display) {
	var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

		//Wenn der Timer endet
        if (--timer < 0) {
			//setze Timer auf 0
            timer = 0;
			//ersetze den Timer durch "Fertig!"
			document.getElementById('time').innerHTML = "Fertig!";
        }
    }, 1000);
}

//setzt 30 Sekunden für den Timer
function thirtySecondsTimer() {
    var thirtySeconds = 30,
        display = document.querySelector('#time');
    startTimer(thirtySeconds, display);
}
//setzt 20 Sekunden für den Timer
function twentySecondsTimer() {  
    var twentySeconds = 20,
        display = document.querySelector('#time');
    startTimer(twentySeconds, display);
}
//setzt 60 Sekunden für den Timer
function sixtySecondsTimer() {
    var sixtySeconds = 60,
        display = document.querySelector('#time');
    startTimer(sixtySeconds, display);
}