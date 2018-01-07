/*global $ */
(function () {
    'use strict';

var folder = "images/";
/*thanks stack overflow https://stackoverflow.com/questions/18480550/how-to-load-all-the-images-from-one-of-my-folder-into-my-web-page-using-jquery*/
$.get({
    url : folder,
    success: function (data) {
        console.log(data);
        $(data).find("a").attr("href", function (i, val) {
            if( val.match(/\.(jpe?g|png|gif)$/) ) { 
                $("ul").append( '<li><img class="im" src="'+ folder + val +'"></li>' );
                $(".im").draggable();
            } 
        });
    }
});

    // var dragging,
    //     offset,
    //     body = $('body');
    //     // zIndex = 0;

    // $('img').mousedown(function (event) {
    //     dragging = $(this);
    //     offset = { y: event.offsetY, x: event.offsetX };
    //     // dragging.css("zIndex", ++zIndex);
    //     dragging.addClass("dragging");
    // }).mouseup(function () {
    //     dragging.removeClass("dragging");
    //     dragging = null;
    // }).mousemove(function (event) {
    //     if (dragging) {
    //         dragging.css({ top: event.clientY - offset.y, left: event.clientX - offset.x });
    //     }
    // });

}());