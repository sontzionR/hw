var myApp = myApp || {};

    myApp.utils = (function (utils) {
    'use strict';

        utils.stringCaseInsensitive = function (string1 ,string2) {

                    return string1.toUpperCase() === string2.toUpperCase();
                };
            
        return utils;  
            
    }(myApp.utils || {}));