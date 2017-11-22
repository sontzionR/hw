/*global $ */
(function () {
    "use strict";
    var loader = $(".loader");
    //  loader.hide();
    var fileName = $("#fileName");
    fileName = fileName.val();
    var button = $("#theButton");
    button.click(function (){
            loader.show();
        var fileName = $("#fileName");
        fileName = fileName.val();
        $.get(fileName, function (fileName) {
            // alert(fileName);
            loader.hide();
            $("#theFile").text(fileName);
        }).fail(function (xhr, statusCode, statusText) {
            loader.hide();
            $("#theFile").append(statusCode,statusText);
            // alert("error: " + statusText);
            // console.log(xhr, statusCode, statusText);
            // $.get("/HTML/HW/class/JavaScript/83/messageBox.js",function(){
            // })

        });
    });

}());