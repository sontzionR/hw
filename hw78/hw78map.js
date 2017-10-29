
var array = [2,4,6];

function multiply(x){
    return x * 2;
}

function myMap(theArray, callback) {
    "use strict";
    var newArray = [];
    theArray.forEach(function (element) {
        newArray.push(callback(element)); 
    });
    return newArray;
}

var theNewArray = myMap(array,multiply);

console.log(array,theNewArray);


  