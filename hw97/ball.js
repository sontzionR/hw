(function () {
    "use strict";

    
  var canvas = document.getElementById("theCanvas"),
    context = canvas.getContext('2d');
    
  var width = window.innerWidth - 20,
      height = window.innerHeight - 20;
  canvas.width = width;
  canvas.height = height;

  
  function getRandomNumberBetween(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
  }
 
  var radius = 25,
    x = getRandomNumberBetween(radius,canvas.width-radius),
    y = getRandomNumberBetween(radius,canvas.height-radius),
    nextX = 1,
    nextY = 1,
    color = 'blue';
    context.beginPath();
    context.arc(x,y,radius, 0, Math.PI * 2, true);
    context.closePath();
    context.fillStyle = color;
    context.fill();

  function draw() {
  

    x += nextX;
    y += nextY;
    if (y + nextY > canvas.height-radius ||
      y + nextY < 0+radius) {
    nextY = -nextY;
  }
  if (x + nextX > canvas.width-radius ||
      x + nextX < 0+radius) {
    nextX = -nextX;
  }
  context.beginPath();
  context.arc(x,y,radius, 0, Math.PI * 2, true);
  context.closePath();
  context.fillStyle = color;
  context.fill();
}

setInterval(() => {
  context.clearRect(0, 0, canvas.width, canvas.height);
  draw();
}, 1);
}());