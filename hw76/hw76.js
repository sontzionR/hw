var theMonthUtils = (function () {
    'use strict';

    var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul','Aug','Sep','Oct','Nov','Dec'];

    return {
        getMonthName: function (num) {
            return months[num];
        },
        getMonthNumber: function (name) {
            for (var i = 0; i < months.length; i++) {
                if (months[i] === name) {
                    return i;
                }
            }
            return "NO SUCH MONTH!";
        }
    };
}());
console.log("theMonthUtils.getMonthName(10)", theMonthUtils.getMonthName(10));
console.log('theMonthUtils.getMonthNumber("Jan")', theMonthUtils.getMonthNumber("Jan"));