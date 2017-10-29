var app = app || {};

  app.createCounters = (function(module) {
    "use strict";
      var counters = 0;

   module.createdCounters = function(){
     return counters;
   };   
   module.createCountersObject = function(){
     counters++;
     var counter=0;
     return{
            /* now it works*/

            increment: function(){
              return counter++;
            },

            getCounter: function() {
              return counter;
            }       
        };
     };
      return module;
       
  }(app.createCounters || {}));