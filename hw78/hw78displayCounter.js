function myFor(num,c){
    for (var i = 0; i < num; i++) {
        c.increment();
        }
    }    


var a = app.theCounter;
var b = app.theCounter;

myFor(5,a);
myFor(5,b);
console.log("a.getCounter()=",a.getCounter()," and b.getCounter()=",b.getCounter(),"because they are really both the same counter!");
b.counter=4444;/* great! this did nothing. counter is not global*/
console.log(b.getCounter());
///////////////////////////

var c = app.createCounters.createCountersObject();
var d = app.createCounters.createCountersObject();

myFor(5,c);
myFor(15,d);
d.counter = 4444;/*now it works, will not alloow access. not global*/
console.log("c.getCounter()=",c.getCounter()," and d.getCounter()=",d.getCounter(),"because they are not the same counter!");

////////////////////////////////////////////

console.log("the amount counters created", app.createCounters.createdCounters());
