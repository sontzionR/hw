var upper = ["Q","W","E"];
var lower = ["q","w","e"];
var mixed = ["q","W","E"];

function ourSome(theArray,callback){

    for(var i = 0; i < theArray.length; i++){
        if(callback(theArray[i])){
            return true;
        }
    }
    return false;
}

function isUpper(letter){
    return letter === letter.toUpperCase();
}

console.log(ourSome(upper,isUpper));
console.log(ourSome(lower,isUpper));
console.log(ourSome(mixed,isUpper));

console.log(ourSome(upper,function(letter){
    return !isUpper(letter);
}));

///////////////////////////////////////////

function printIt(element){
       console.log(element);
}

function onlyIf(theArray,callback,action){
    
        for(var i = 0; i < theArray.length; i++){
            if(callback(theArray[i])){
               action(theArray[i]);
            }
        }
    }

    console.log(onlyIf(mixed,isUpper,printIt));    