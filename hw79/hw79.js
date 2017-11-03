(function(){
    "use strict";
    var theBody = document.body;
    // var fontChooser = document.getElementById("fontColor").value;
    // var backgroundChooser = document.getElementById("backgroundColor").value;

    var theButton = document.getElementById("theButton");
    theButton.addEventListener('click', function () {
        var fontChooser = document.getElementById("fontColor").value;
        var backgroundChooser = document.getElementById("backgroundColor").value;
        theBody.style.color = fontChooser;
        theBody.style.backgroundColor = backgroundChooser;
    });

}());    

