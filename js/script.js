const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('Sep 14, 2021 00:00:00').getTime(),
    x = setInterval(function() {    

      let now = new Date().getTime(),
          distance = countDown - now;

      document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

    }, second)


// loader
document.onreadystatechange = function() { 
	if (document.readyState !== "complete") { 
		document.querySelector("body").style.visibility = "hidden"; 
		document.querySelector(".loader").style.visibility = "visible"; 
	} else { 
		document.querySelector(".loader").style.display = "none"; 
		document.querySelector("body").style.visibility = "visible"; 
	} 
}; 
