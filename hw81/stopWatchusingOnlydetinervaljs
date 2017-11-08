(function () {
    "use strict";
    
    var milliBox =document.getElementById("millibox");
    var secondBox =document.getElementById("secondbox");
    var minuteBox =document.getElementById("minutebox");
    var hourBox =document.getElementById("hourbox");
    var theInterval;
    var saved= [];
   var millisecond = 0;
   var second = 0;
   var minute =0;
   var hour =0;
    function cycleTimer() {
        
        theInterval = setInterval(function () {
            millisecond++;
            if(millisecond > 999){
            millisecond = 0;
            second++;
            }
            if(second > 59){
                second = 0;
                minute++;
            }
            if(minute > 59){
                minute = 0;
                hour++;
            }
            milliBox.innerHTML = millisecond;
            secondBox.innerHTML =second;
            minuteBox.innerHTML =minute;
            hourBox.innerHTML =hour;
            // console.log(millisecond);
            // console.log(saved[0]);
            // console.log(saved[1]);
            // console.log(saved[2]);
            // console.log(saved[3]);
        }, 1);
    }

    var theButton = document.getElementById("theButton");
    theButton.addEventListener("click", function () {
        if (theInterval) {
            clearInterval(theInterval);
            theInterval = 0;
            theButton.innerHTML = 'Start';
            var save = {
                milli: millisecond,
                sec: second,
                min: minute,
                hr: hour
            };
            saved.push(save);

        } else {
            cycleTimer();
            theButton.innerHTML = 'Stop';
        }
    });

}());