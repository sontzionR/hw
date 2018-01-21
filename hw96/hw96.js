(function () {
    "use strict";

    var canvas = document.getElementById("theCanvas"),
    context = canvas.getContext('2d');
    // canvas.width = window.innerWidth/2;
    // canvas.height = window.innerHeight/2;
    var x=0,
    y=0,
    
    size=64,
    direction = "right";
    function resizeCanvas() {
        canvas.width = window.innerWidth - 10;
        canvas.height = window.innerHeight - 10;
    }

    window.addEventListener('resize', resizeCanvas);

    resizeCanvas();

    var img = document.createElement('img');
    img.src = "images/snake.png";

    
    img.onload = function () {
        context.drawImage(img, 0,0, size, size);
    };
   
    window.addEventListener('keydown', function (event) {
        console.log(event);
        if(event.code==="ArrowDown"){
            direction = "down";
        }
        if(event.code==="ArrowRight"){
            direction = "right";
        }
        if(event.code==="ArrowUp"){
            direction = "up";
        }
        if(event.code==="ArrowLeft"){
            direction = "left";
        }
    });
    
    function clear(){
         context.clearRect(0,0, canvas.width, canvas.height);
    }
    function director(){
        if(direction==="down"){
            ++y;
         }
         if(direction==="right"){
             ++x;
         }
         if(direction==="up"){
             --y;
         }
         if(direction==="left"){
             --x;
         }
    }
    function move(){
       director();
        context.drawImage(img,x,y,size,size); 
    }
    var interval = setInterval(function(){
        clear();
         move();
    },10);
}());