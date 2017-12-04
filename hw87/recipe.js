/*global pcs,$*/
(function () {
    "use strict";
    var food = $("#food"),
        name = $("#recipeName"),
        picDiv = $("#photo"),
        list = $("#ingredients"),
        body = $("body");
  
    function listReci(a){
        var i,z;
        for (i = 0; i < a.length; i++) {
            if(a[i].name===food.val()){
                food.val('');
                name.append("<h1>"+a[i].name+"</h2>");
                picDiv.attr('src',a[i].url).css("width", "400px","height","400px");
                console.log(a[i]);         
                for(z= 0; z < a[i].ingredients.length; z++){
                    var  ing = a[i].ingredients;
                    i++;
                    list.append("<li>"+ing+"</li>");
                    console.log(ing);
                } 
            }  
        } 

    }

    $("#theButton").click(function (){
        name.empty();
        picDiv.attr('src', '','alt','');
        list.empty();
        if(food.val().length === 0){
            body.append(pcs.messagebox.show("you must enter a food"));
        }else{ 
            $.getJSON("recipe.php", function (item) {
                listReci(item);
            });
            // $.get("recipe.json", function (item) {
            //     // var i;
            //     var i,z;
            //     for (i = 0; i < item.length; i++) {
            //         if(item[i].name===food.val()){
            //             food.val('');
            //         //    selectedFood = item[i].name;
            //            name.append(item[i].name);
            //            picDiv.attr('src',item[i].url);
            //            console.log(item[i]);
            //            list.append("<h2>"+"ingredients"+"</h2>");
            //           for(z= 0; z < item[i].ingredients.length; z++){
            //             var  ing = item[i].ingredients[z];
            //             list.append("<li>"+ing+"</li>");
            //             console.log(ing);
            //            } 
            //         }
            //         // else{
            //         //    body.append(pcs.messagebox.show("That food is not found"));
            //         // }   
            //     } 
            // });
    }   
    });

}());