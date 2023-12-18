<link href='https://fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'>
<link rel='stylesheet' type='text/css' href='css/pomodoro.css'>

<h1 class="text-center" style="margin-bottom:30px">Pomodoro Timer</h1>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 col-md-offset-4 text-center">
      <p>Break Time</p>
    </div>
    <div class="col-md-2 text-center">
      <p>Session Time</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-2 col-md-offset-4 text-center">
      <button class="btn" id="break-minus" onclick="breakMinus()">-</button><span id="break-time">5</span><button class="btn" id="break-plus" onclick="breakPlus()">+</button>
    </div>
    <div class="col-md-2 text-center">
      <button class="btn" id="session-minus" onclick="sessionMinus()">-</button><span id="session-time">25</span><button class="btn" id="session-plus" onclick="sessionPlus()">+</button>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      
      <canvas class="timer-face" id="timer-face" onclick='startStopTimer()' >
Your browser does not support the canvas element.
</canvas>
      
    </div>
  </div>
</div>