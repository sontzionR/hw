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
            counter:counter,

            increment: function(){
              return this.counter++;
            },

            getCounter: function() {
              return this.counter;
            }       
        };
     };
      return module;
       
  }(app.createCounters || {}));