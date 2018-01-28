
    
    import $ from 'jquery';
    var theBody = $('body');
    // var fontChooser = document.getElementById("fontColor").value;
    // var backgroundChooser = document.getElementById("backgroundColor").value;

    var theButton = $("#theButton");
    theButton.click(function () {
        var backgroundChooser = $("#backgroundColor");
        theBody.css("background-color" , backgroundChooser.val());
        
    });
 
