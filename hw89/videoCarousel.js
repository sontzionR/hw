(function () {
    "use strict";
    var theVideo = $("#videoId").css({"width":"600px","height":"450px","border":"20px green","border-style":"solid","background-color":"black"});
    $.getJSON("video.php", function (item) {
        var length = item.length-1;
        var index = 0;
        $("#a").click(function (event) {
            if (event.target.id === 'prev') {
                if(index > 0){
                    index--; 
                }
                else{
                    index=length;
                }  
            theVideo.attr('src', item[index].photo);
            console.log(index);
            }
            else if(event.target.id === 'next'){
                if(index < length){
                    index++;
                }
                else{
                    index=0;
                }
            theVideo.attr('src', item[index].photo);
            console.log(index);
            }
            else if(event.target.id === 'slide'){
                setInterval(function() {

                    if (index < length) {
                        theVideo.attr('src', item[index].photo);
                        console.log(index);
                    }
                    else{
                        index=0;
                        theVideo.attr('src', item[index].photo);
                        console.log(index);
                    }
                    index++;
                }, 5000);
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