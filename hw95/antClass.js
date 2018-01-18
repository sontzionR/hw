/*global $ */
(function (){
    'use strict';
    class Ant{
        constructor(clr){
            this.color = clr;
            this.x = canvas.width/2;
            this.y = canvas.height/2;
        }
        move(max,min) {
        this.x += Math.floor(Math.random() * (max - min + 1) + min);
        this.y += Math.floor(Math.random() * (max - min + 1) + min);
        // if(!this.x > canvas.width && !this.x < 0){
        //     this.x += Math.floor(Math.random() * (max - min + 1) + min);
        // }else if(this.x > canvas.width){
        //      this.x--;
        // }else{
        //     this.x++
        // }
        // if(!this.y > canvas.height && !this.y < 0){
        //     this.y += Math.floor(Math.random() * (max - min + 1) + min);
        // }else if(this.y > canvas.height){
        //      this.y--;
        // }else{
        //     this.y++
        // }
       
        if(this.x > canvas.width){
            this.x--;
        }else if(this.x < 0){
            this.x++;
        }

        if(this.y > canvas.height){
            this.y--;
        }else if(this.y < 0){
            this.y++
        }
         // context.color = this.color;
        context.fillStyle = this.color;
        context.fillRect(this.x, this.y, 2, 2);
        }

    }
    var canvas = document.getElementById("theCanvas"),
    context = canvas.getContext('2d'),
    colr = $("#color"),
    amount = $("#num"),
    ants = [];

    canvas.width = window.innerWidth/2;
    canvas.height = window.innerHeight/2;

    function add(am){
        for (var i = 0; i < am; i++) {
            if(colr){
                ants.push(new Ant(colr.val()));
            }else{
            ants.push(new Ant('black'));
           }
        }
    }

    add(100);

    $("#go").click(()=>{
        add(amount.val());    
    });

    setInterval(() => {
        context.clearRect(0, 0, canvas.width, canvas.height);
        ants.forEach(ant => ant.move(-2,2));
    }, 10);
}());