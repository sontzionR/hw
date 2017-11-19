var pcs = (function () {
    "use strict";
    function get(id) {
        return document.getElementById(id);
    }
    function setCss(elem, property, value) {
        elem.style[property] = value;
    }
	
    return function (id) {
        var elem = get(id);
        var oldDisplayVal;
        var data;
        

        return {
            css: function (property, value) {
                if(value){
                setCss(elem, property, value);
            } else {
                return getComputedStyle(elem).getPropertyValue(property);
            }
                return this;
            },
            pulsate: function () {
                // var fontSize = 32,
                var fontSize = parseInt(this.css("font-size")),
                    i = 1,
                    //that = this,
                    interval = setInterval(function () {
                        if (i <= 5 || i > 15) {
                            fontSize += 5;
                        } else {
                            fontSize -= 5;
                        }
                        //that.setCss("fontSize", fontSize + 'px');
                        setCss(elem, "fontSize", fontSize + 'px');

                        if (i++ === 20) {
                            clearInterval(interval);
                        }
                    }, 100);
                return this;
            },
            click: function (callback) {
                elem.addEventListener('click', callback);
                return this;
            },
            hide: function () {
                oldDisplayVal = this.css("display");
                this.css("display", "none");
                //setCss(elem, "display", "none");
                return this;
            },
            show: function () {
                var newDisplay = oldDisplayVal !== "none" ? oldDisplayVal : "inline-block";
                this.css("display", newDisplay);
                return this;
            },
            setInnerHtml: function (html) {
                elem.innerHTML = html;
                return this;
            },
            getElement: function () {
                return elem;
            },

            // new for HW 84
            setValue: function (){
                  return elem.value;
            },
            setData: function(Data){
                  data = Data;
                  return this;
            },
            getData: function(){
                 
                  return data;
                }
            

        };
    };
}());

