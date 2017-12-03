(function () {
    "use strict";
    var food = $("#food"),
        // selectedFood,
        name = $("#recipeName"),
        picDiv = $("#photo"),
        list = $("#ingredients"),
        body = $("body");

    $("#theButton").click(function (){
        name.empty();
        list.empty();
        if(food.val().length === 0){
            body.append(pcs.messagebox.show("you must enter a food"));
        }else{ 
            $.get("recipe.json", function (item) {
                // var i;
                var i,z;
                for (i = 0; i < item.length; i++) {
                    if(item[i].name===food.val()){
                        food.val('');
                    //    selectedFood = item[i].name;
                       name.append(item[i].name);
                       picDiv.attr('src',item[i].url);
                       console.log(item[i]);
                       list.append("<h2>"+"ingredients"+"</h2>");
                      for(z= 0; z < item[i].ingredients.length; z++){
                        var  ing = item[i].ingredients[z];
                        list.append("<li>"+ing+"</li>");
                        console.log(ing);
                       } 
                    }
                    // else{
                    //    body.append(pcs.messagebox.show("That food is not found"));
                    // }   
                } 
            }).fail(function (xhr, statusCode, statusText) {
                 
            });
    }   
    });

}());