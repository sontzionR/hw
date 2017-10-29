var myApp = myApp || {};

    myApp.utils = (function (utils) {
            'use strict';

             months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul','Aug','Sep','Oct','Nov','Dec'];

                utils.getMonthName = function (num) {
                    return months[num];
                },
                utils.getMonthNumber = function (name) {
                    for (var i = 0; i < months.length; i++) {
                        if (months[i] === name) {
                            return i;
                        }
                    }
                    return "NO SUCH MONTH!";
                };
              return utils;  
            
        }(myApp.utils || {}));