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

var interestCalculator = (function (){
    'use strict';
    var rate=0;
    var years=0; 

    return{
    setRate : function(setRt){
        rate = setRt;
        return this;
    },
    setYears : function(setYrs){
        years = setYrs;
        return this;
    },
    calculateInterest : function(amount){
         return amount * rate * years;    
    }
  }; 
}());

interestCalculator.setRate(5);
interestCalculator.setYears(15);
console.log(interestCalculator.calculateInterest(405000));
console.log(interestCalculator.setRate(10).setYears(10).calculateInterest(405000));