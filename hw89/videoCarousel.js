(function () {
    /*global $*/
    "use strict";
    var theImg = $("#imgId").css({"width":"600px","height":"450px","border":"20px green","border-style":"solid","background-color":"black"});
    // var theVideo = $("#videoId").css({"width":"600px","height":"450px","border":"20px green","border-style":"solid","background-color":"black"}).hide();
    $.getJSON("video.php", function (item) {
        var length = item.length-1;
        var index = 0;
        var display = function(indx){
            theImg.show().attr('src', item[indx].photo);
            console.log(indx);
            };
        var interval;
        display(index);
        $("#a").click(function (event) {
            if (event.target.id === 'prev') {
                if(interval){
                    clearInterval(interval);
                    interval = 0;
                    return;
                }
                    if(index > 0){
                        index--; 
                    }else{
                        index=length;
                    }  
                    display(index);   
            }
            else if(event.target.id === 'next'){
                if(interval){
                    clearInterval(interval);
                    interval = 0;
                    return;
                }
                    if(index < length){
                        index++;
                    } else{
                        index=0;
                    }
                    display(index);
            }
            else if(event.target.id === 'slide'){
                if(!interval){
                    // $("#slide").css("background-color","red");
                    interval = setInterval(function() {
                        if (index < length) {
                            display(index);
                            index++;
                        }else if(index === length){
                            display(index);
                            index=0;
                        } 
                    }, 1000);
                }else{
                    clearInterval(interval);
                    interval = 0;
                }
            }
        });
        
        // $("#next").click(function () {
        //     if(index < length){ 
        //         index++;
        //     }
        //     else{
        //         index=0;
        //     }
        
        //     theVideo.attr('src', item[index].video)[0].play();
        //     console.log(index);
        // });
        // $("#prev").click(function () {
        //     if(index > 0){
        //         index--; 
        //      }
        //      else{
        //           index=length;
        //      }  
        //     theVideo.attr('src', item[index].video)[0].play();
        //     console.log(index);
        // });
        // console.log(index);
    });
}());