/*global $ */
(function () {
    "use strict";
   
    $("#theButton").click(function (){
        var loader = $(".loader");
        loader.css({"border": "6px solid #f3f3f3","border-radius": "50%","border-top": "6px solid #3498db","width": "15px","height": "15px", "-webkit-animation": "spin 1s linear infinite", "animation": "spin 1s linear infinite"}).show();
        var fileName = $("#fileName");
        fileName = fileName.val();
        setTimeout(function () {
            $.get(fileName, function (file) {
                loader.hide();
                $("#theFile").append(file);
            }).fail(function (xhr, statusCode, statusText) {
                loader.hide();
                 $("#theFile").append(statusCode,statusText).css("background-color","red");
                //  alert("error: " + statusText);
                // console.log(xhr, statusCode, statusText);
                //cant get it to work  $.get(/*"/HTML/HW/class/JavaScript/83/messageBox.js"*/"/HTML/HW/class/JavaScript/81/messageBox.js",function(d){
               //  pcs.messageBox.show("error");
                //  });

            });
        },2000);    
    });

}());