//function for the "back-Button"
function goBack(){
				window.history.back();
			}


//function for timer
function startTimer(duration, display) {
	var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

		//if timer ends
        if (--timer < 0) {
            timer = 0;
			document.getElementById('time').innerHTML = "Fertig!";
			//creates costant of "start"-button
			const startBtn = document.getElementById('startTimer');
			//disables "start"-button
			startBtn.disabled = true;
        }
    }, 1000);
}

//sets 30 seconds for timer
function thirtySecondsTimer() {
    var thirtySeconds = 30,
        display = document.querySelector('#time');
    startTimer(thirtySeconds, display);
}