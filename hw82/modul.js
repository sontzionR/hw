/*homework 82 parts 1,2 and 3. In addition, i made such as when the modul is checked, each
 additional message box will be be the only one that you may click in other words, you must
 click the last box before the previous. also once you click that one, only then will the previous one enable click*/

var pcs = pcs || {};

pcs.messagebox = (function () {
    "use strict";
    
     var span;
     var input;
     var count=1;
     var checkbox;
     var modulDiv;
     var anothercount = 1;
     var msgBoxColor = ['blue', 'red', 'green','yellow','purple','pink'];
     var top = -50;

    function createElement(type) {
        return document.createElement(type);
    }

    function inputText(){
       
        var div = createElement("div");
        input = createElement("input");
        checkbox = document.createElement("INPUT");
        checkbox.setAttribute("type", "checkbox");
        div.appendChild(checkbox);
        var buttonDiv = createElement("div");
        var okButton = createElement("button");
        modulDiv = createElement("div");
        div.appendChild(input);
        okButton.innerHTML = "OK";
        buttonDiv.appendChild(okButton);
        div.appendChild(buttonDiv);
        document.body.appendChild(div);
        modulDiv.style.height='100%';
        modulDiv.style.width ='100%';
        modulDiv.style.backgroundColor='lightGrey';
        modulDiv.style.position='absolute';
        modulDiv.style.height='100%';
        modulDiv.style.top ='0';
        modulDiv.style.opacity='.5';

        div.style.backgroundColor = 'blue';
        div.style.padding = '20px';
        div.style.width = '200px';
        div.style.height = '100px';
        div.style.border = '1px solid blue';
        div.style.position = 'absolute';
        div.style.boxSizing = 'border-box';
        div.style.display = 'inline-block';
        buttonDiv.style.position = 'absolute';
        buttonDiv.style.bottom = '6px';
        buttonDiv.style.textAlign = 'center';
        buttonDiv.style.width = '100%';
        buttonDiv.style.marginLeft = '-20px';

        okButton.addEventListener("click", function () {
            count++;
            top = top+25;
            if(checkbox.checked === true){
               div.style.zIndex = count+1;
            modulDiv.style.zIndex = count;
            document.body.appendChild(modulDiv); 
            }
            show();
            input.value = "";
            
        });
    }

    function show() {
        
        var div = createElement("div");
        span = createElement("span");
        var buttonDiv = createElement("div");
        var okButton = createElement("button");
        span.innerHTML = input.value;
        div.appendChild(span);
        okButton.innerHTML = "OK";
        buttonDiv.appendChild(okButton);
        div.appendChild(buttonDiv);
        document.body.appendChild(div);
        div.style.zIndex = count;
        div.style.backgroundColor=msgBoxColor[Math.floor(Math.random() * msgBoxColor.length)];
        div.style.padding = '20px';
        div.style.width = '400px';
        div.style.height = '100px';
        div.style.border = '4px solid black';
        div.style.position = 'absolute';
        div.style.left = '50%';
        div.style.top = '50%';
        div.style.marginLeft = '-200px';
        // div.style.marginTop = '-10px';
        div.style.marginTop = top+'px';
        div.style.boxSizing = 'border-box';
        div.style.display = 'inline-block';

        buttonDiv.style.position = 'absolute';
        buttonDiv.style.bottom = '6px';
        buttonDiv.style.textAlign = 'center';
        buttonDiv.style.width = '100%';
        buttonDiv.style.marginLeft = '-20px';

        if(checkbox.checked !== true){
        div.addEventListener("click",function(){
            div.style.zIndex =(count++) * 10;
        });
        }

        okButton.addEventListener("click", function () {
           
            anothercount++;
            document.body.removeChild(div);
            modulDiv.style.zIndex=count- anothercount;
            

        });
    }

    return {
        inputText: inputText,
        // show: show
    };
}());