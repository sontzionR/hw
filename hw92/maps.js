/*global $,google */
function initMap() {
    "use strict";
    // var location = { lat: -34.397, lng: 150.644 },
    var map = new google.maps.Map(
        document.getElementById('map'),
        {
            // center: location,
            zoom: 14
            // mapTypeId: google.maps.MapTypeId.SATELLITE
        }
        
    ),
    markers=[],
    theList =$("ul"),
    rows = $("#rows"),
    search=$("#search"),
    infoWindow = new google.maps.InfoWindow({
        maxWidth:250
    });
    navigator.geolocation.getCurrentPosition(function(position) {
        var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };

        infoWindow.setPosition(pos);
        infoWindow.setContent('Location found.');
        infoWindow.open(map);
        map.setCenter(pos);
    });
    var drawingManager = new google.maps.drawing.DrawingManager({
        map:map
    }); 
     var trafficLayer = new google.maps.TrafficLayer({
         map:map
     });

   
    $("#go").click(function(){
        $.getJSON('http://api.geonames.org/wikipediaSearch?&callback=?',
        {
            q:search.val(),
            maxRows:rows.val(),
            username:'bentzion',
            type:'json'   
        },
        function(data){    
            console.log(data);  
             var bounds = new google.maps.LatLngBounds();     
             data.geonames.forEach(function(place) {
                var location = { lat: place.lat, lng: place.lng },
                        marker = new google.maps.Marker({
                            position: location,
                            map: map,
                            title:place.title,
                            icon: place.thumbnailImg ? {
                            url: place.thumbnailImg,
                            scaledSize: new google.maps.Size(50, 50)
                        } : null
                    });
               
                bounds.extend(location);

                marker.addListener('click', function () {
                    infoWindow.setContent(place.summary + '<br><a target="_blank" href="http://' + place.wikipediaUrl + '">Wikipedia</a>');
                    infoWindow.open(map, marker);
                });
                markers.push(marker);    

                $('<li><img src="' + (place.thumbnailImg || 'default.png') + '"/>' + place.title + '</li>')
                .appendTo(theList)
                .click(function () {
                     map.panTo(location);
                     map.setZoom(15);
                });
            });
            map.fitBounds(bounds);
         });
         $("#clear").click(function(){
            for (var i = 0; i < markers.length; i++) {
                    markers[i].setMap(null);
                    theList.empty();
                }
                markers=[]; 
        });   
    }); 
    
}