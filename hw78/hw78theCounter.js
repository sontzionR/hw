var app = app || {};

  app.theCounter = (function(module) {
    "use strict";
    var counter = 0;
   
      module.increment = function() {
         return counter++;
      };
      module.getCounter = function() {
        return counter;
      };
      return module;
       
  }(app.theCounter || {}));