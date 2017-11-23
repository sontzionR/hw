/*global $ */
/*global pcs */
(function () {
    "use strict";
   
    $("#theButton").click(function (){
        var fileName = $("#fileName");
        // fileName = fileName.val();
        if(fileName.val().length === 0){
            $("body").appendTo(pcs.messagebox.show("Please enter a file path"));
        }else{
        var loader = $(".loader");
        loader.css({"border": "6px solid #f3f3f3","border-radius": "50%","border-top": "6px solid #3498db","width": "15px","height": "15px", "-webkit-animation": "spin 1s linear infinite", "animation": "spin 1s linear infinite"}).show();
        setTimeout(function () {
            $.get(fileName.val(), function (file) {
                loader.hide();
                $("#theFile").text(file).css("background-color","green");
                fileName.val('');
            }).fail(function (xhr, statusCode, statusText) {
                loader.hide();
                 $("#theFile").text(statusCode + statusText).css("background-color","red");
                 $("body").appendTo(pcs.messagebox.show("error" + " "+ statusText));
                 fileName.val('');
                //  $("body").appendTo(pcs.messagebox.show("error" + " "+ statusText,true));   
            });
        },2000); 
    }   
    });

}());