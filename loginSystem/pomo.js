var timerRunning = false;
var timeinterval = 0;
var sessionOrBreak = "Session";
var timerValue = "25";
var fillColor = "#009973";

/* make the drawn text on the canvas look good */

var PIXEL_RATIO = (function () {
    var ctx = document.createElement("canvas").getContext("2d"),
        dpr = window.devicePixelRatio || 1,
        bsr = ctx.webkitBackingStorePixelRatio ||
              ctx.mozBackingStorePixelRatio ||
              ctx.msBackingStorePixelRatio ||
              ctx.oBackingStorePixelRatio ||
              ctx.backingStorePixelRatio || 1;
console.log("dpr = " + dpr);
  console.log("bsr = " + bsr);
console.log("pixel ratio = " + dpr/bsr);
    return dpr / bsr;
})();

function createHiDPICanvas(w, h, ratio) {
    if (!ratio) { ratio = PIXEL_RATIO; }
    var can = document.getElementById("timer-face");;
    can.width = w * ratio;
    can.height = h * ratio;
    can.style.width = w + "px";
    can.style.height = h + "px";
    //can.getContext("2d").setTransform(ratio, 0, 0, ratio, 0, 0);
    return can;
}


var canvas = createHiDPICanvas(400,400);
var ctx = canvas.getContext("2d");
var x = canvas.width/2;
var y = canvas.height/2;

ctx.clearRect(0,0,canvas.width, canvas.height);
ctx.fillStyle = "white";
ctx.textAlign = "center";
ctx.font = ("40px 'PT Mono'");
ctx.fillText(sessionOrBreak,x,y-50);
ctx.fillText(timerValue,x,y+50);


function breakMinus() {
  var value = Number(document.getElementById('break-time').innerHTML);
  if (value > 1) {
    value = value - 1;
  }
  document.getElementById('break-time').innerHTML = value;


  if (sessionOrBreak === "Break" && timerRunning == false) {
    timerValue = String(value);
    ctx.clearRect(0,0,canvas.width, canvas.height);
    ctx.fillStyle = "white";
    ctx.textAlign = "center";
    ctx.font = ("40px 'PT Mono'");
    ctx.fillText(sessionOrBreak,x,y-50);
    ctx.fillText(timerValue,x,y+50);
  }

}

function breakPlus() {
  var value = Number(document.getElementById('break-time').innerHTML);
  if (value < 60) {
    value = value + 1;
  }
  document.getElementById('break-time').innerHTML = value;

  if (sessionOrBreak === "Break" && timerRunning == false) {
    timerValue = String(value);
    ctx.clearRect(0,0,canvas.width, canvas.height);
    ctx.fillStyle = "white";
    ctx.textAlign = "center";
    ctx.font = ("40px 'PT Mono'");
    ctx.fillText(sessionOrBreak,x,y-50);
    ctx.fillText(timerValue,x,y+50);
  }

}

function sessionMinus() {
  var value = Number(document.getElementById('session-time').innerHTML);
  if (value > 1) {
    value = value - 1;
  }
  document.getElementById('session-time').innerHTML = value;


  if (sessionOrBreak === "Session" && timerRunning == false) {
    timerValue = String(value);
    ctx.clearRect(0,0,canvas.width, canvas.height);
    ctx.fillStyle = "white";
    ctx.textAlign = "center";
    ctx.font = ("40px 'PT Mono'");
    ctx.fillText(sessionOrBreak,x,y-50);
    ctx.fillText(timerValue,x,y+50);    
  }

}

function sessionPlus() {
  var value = Number(document.getElementById('session-time').innerHTML);
  if (value < 120) {
    value = value + 1;
  }
  document.getElementById('session-time').innerHTML = value;


  if (sessionOrBreak === "Session" && timerRunning == false) {
    timerValue = String(value);
    ctx.clearRect(0,0,canvas.width, canvas.height);
    ctx.fillStyle = "white";
    ctx.textAlign = "center";
    ctx.font = ("40px 'PT Mono'");
    ctx.fillText(sessionOrBreak,x,y-50);
    ctx.fillText(timerValue,x,y+50);
  }

}

function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.now();
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  return {
    'total': t,
    'minutes': minutes,
    'seconds': seconds
  };
}



function startStopTimer() {
  
  var sound = new Howl({
  urls: ['http://www.freesound.org/data/previews/267/267336_3112522-lq.mp3']
});
  
  
  if (timerRunning == false) {
    timerRunning = true;
    var clock = timerValue;
    var minuteRegex = /([0-9][0-9]?)(?=\:[0-9][0-9]+)*/;
    var secRegex = /[0-9][0-9]?\:([0-9][0-9])/;

    var getMinutes = Number(timerValue.match(minuteRegex)[0]);

    var secondsExists = timerValue.match(secRegex);
    var getSeconds = 0;
    if (secondsExists) {
      getSeconds = Number(secondsExists[1])
    }
  
    var currentTime = Date.now();
    var deadline = new Date(currentTime + getMinutes * 60 * 1000 + getSeconds*1000);

    function updateClock() {
      var t = getTimeRemaining(deadline);
      timerValue = ('0' + t.minutes).slice(-2) + ':' + ('0' + t.seconds).slice(-2);
       
      var timeRatio = 1;
      if (sessionOrBreak == "Session"){
        timeRatio = t.total / ((document.getElementById('session-time').innerHTML)*60*1000);
      } else{
        timeRatio = t.total / ((document.getElementById('break-time').innerHTML)*60*1000);
      }
      
      ctx.clearRect(0,0,canvas.width, canvas.height);
      ctx.fillStyle=fillColor;
      ctx.fillRect(0,0,canvas.width,canvas.height*timeRatio);
      ctx.fillStyle = "white";
      ctx.textAlign = "center";
      ctx.font = ("40px 'PT Mono'");
      ctx.fillText(sessionOrBreak,x,y-50);
      ctx.fillText(timerValue,x,y+50);
      
      if (t.total <= 0) {
        sound.play();
        clearInterval(timeinterval);
        timerRunning = false;
        if (sessionOrBreak === 'Session'){
          sessionOrBreak = 'Break';
          timerValue = document.getElementById('break-time').innerHTML;
          fillColor = '#992600';
        } else {
          sessionOrBreak = 'Session';
          timerValue = document.getElementById('session-time').innerHTML;
          fillColor = '#009973';
        }
        
        startStopTimer();
      }
    }
    updateClock();
    timeinterval = setInterval(updateClock, 1000);

  }
  else {
    clearInterval(timeinterval);

    timerRunning = false;

  }
}

/*
https://www.w3schools.com/canvas/tryit.asp?filename=trycanvas_draw
*/