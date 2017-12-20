(function () {
    "use strict";
    var theVideo = $("#videoId"),
        list = $("#list").css({"margin-left":"15%","margin-right":"15%"});
        theVideo.css({"width":"600px","height":"450px","margin-left":"33%","border":"20px green","border-style":"solid","background-color":"black"});
    $.getJSON("video.php", function (item) {
        // var i;
        item.forEach(function(item){
            var div =$("<div></div>").css({"width":"300px","height":"300px","float":"right","text-align": "center","border":"3px solid"});
                        var pic = $("<img>");   
                        pic.attr('src',item.photo).css({"width": "200px","height":"200px"}); 
                    div.append("<h1>"+item.name+"</h1>",pic);
                    div.appendTo(list);
                    
                    div.click(function () {
                        var theVid = item.video;
                        //  theVideo.append('<video src="'+item.video+'" controls></video>');
                        theVideo.attr('src', item.video)[0].load();
                        // theVideo.load();
                        // document.getElementById('videoId').play();
                    });
                });
        
        
            
    //     for(i=0;item.length;i++){ 
    //         var div =$("<div></div>").css({"width":"300px","height":"300px","float":"right","text-align": "center"});
    //         var pic = $("<img>");   
    //         pic.attr('src',item[i].photo).css({"width": "200px","height":"200px"}); 
    //     div.append("<h1>"+item[i].name+"</h1>",pic);
    //     div.appendTo(list).click(function () {
    //         theVideo.attr('src', item[i].video).show()[0].play();
    //     });
    // }
 });
 
}());