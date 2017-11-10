(function () {
    "use strict";
    function get(id) {
        return document.getElementById(id);
    }
    var milliBox = get("millibox");
    var secondBox = get("secondbox");
    var minuteBox = get("minutebox");
    var hourBox = get("hourbox");
    var logTable = get("logTable");
    var theInterval;
    var millisecond;
    var second;
    var minute;
    var hour;
    var start;
    var end;
    var i = 1;
    var tempdate;
    var saved;
    

    function savedInterval() {
        saved = end - start;
    }

    function displayTimer() {
        theInterval = setInterval(function () {
            console.log(millisecond, "," + second, "," + minute, "," + hour);

            tempdate = new Date();
            millisecond = new Date(tempdate - start).getMilliseconds();
            second = new Date(tempdate - start).getSeconds();
            minute = new Date(tempdate - start).getMinutes();
            hour = new Date(tempdate - start).getUTCHours();
            console.log(millisecond, "," + second, "," + minute, "," + hour);

            milliBox.innerHTML = millisecond;
            secondBox.innerHTML = second;
            minuteBox.innerHTML = minute;
            hourBox.innerHTML = hour;
        }, 1);
    }
    function table(){
        var row = logTable.insertRow();
        var occuranceCell = row.insertCell();
        var startCell = row.insertCell();
        var endCell = row.insertCell();
        var intravelCell = row.insertCell();

        occuranceCell.innerHTML = i++;
        startCell.innerHTML = start;
        endCell.innerHTML = end;
        intravelCell.innerHTML = saved;
    }
    var theButton = get("theButton");
    theButton.addEventListener("click", function () {
        if (theInterval) {
            clearInterval(theInterval);
            theInterval = 0;
            theButton.innerHTML = 'Start';
            end = new Date();
            savedInterval();
            table();

        } else {
            theButton.innerHTML = 'Stop';
            start = new Date();
            console.log(start);
            displayTimer();

        }

    });

}());