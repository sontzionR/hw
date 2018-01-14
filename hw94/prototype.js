(function() {
'use strict';

function Vehicle(color){
    this. color = color;
}

Vehicle.prototype.go = function(speed){
    this.speed = speed;
     console.log("you are going "+this.speed+" mph");
};

Vehicle.prototype.print = function (){
    console.log("this "+this.color+" 'object' is going "+this.speed);
};

var chevy = new Vehicle('black');
chevy.go(55);
chevy.print();


function Plane(color){
    Vehicle.call(this,color); 
}

Plane.prototype = Object.create(Vehicle.prototype);
Plane.prototype.go = function (speed){
    this.speed = speed;
    console.log("you are now flying "+this.speed+" mph");
};

/*Plane.prototype.print = function(){
    console.log("this "+this.color+" 'object' is flying "+this.speed)
}*/

var boeing737 = new Plane('blue');
boeing737.go(350);
boeing737.print();

}());