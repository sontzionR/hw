(function () {
    "use strict";
    var page = document.body;
    // var lorem = document.getElementById("lorem");
    
    function changeColor() {
        //with rgb
        var red = Math.floor(Math.random() * 255);
        var green = Math.floor(Math.random() * 255);
        var blue = Math.floor(Math.random() * 255);

        //with hex
        var letters= '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
          color += letters[Math.floor(Math.random() * 16)];
        } 
    page.style.backgroundColor = color;   
    page.style.color = "rgb("+red+","+green+","+blue+")";
    
    }


    var intervalId;
    var startString = 'Start';
    var stopString = 'Stop';
    
    var changeButton = document.getElementById("changeButton");
    changeButton.innerHTML = startString;

    changeButton.addEventListener('click', function () {
        if (changeButton.innerHTML === startString) {
             intervalId = setInterval(changeColor, 250);
            // intervalId = setInterval(getRandomColor, 250);
            changeButton.innerHTML = stopString;
        } else {
            clearInterval(intervalId);
            changeButton.innerHTML = startString;
        }
    });

}());