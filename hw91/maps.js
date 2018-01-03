/*global google,$ */
(function () {
    "use strict";
   
    
    var search = $("#search");
    var map= new google.maps.Map(
        document.getElementById('map'),
        {        
          center: {lat:40.092524, lng:-74.167260},
            zoom: 3
        }
    );
    $("#go").click( function(){
        $.getJSON('http://api.geonames.org/wikipediaSearch?q='+search.val()+'&maxRows=10&username=bentzion&type=json&callback=?',function(data){
            console.log(data);
            data.geonames.forEach(function(e) {
                var location = { lat: e.lat, lng: e.lng};
                new google.maps.Marker({
                    position: location,
                    map: map
                });
             });
        });
    });
}());