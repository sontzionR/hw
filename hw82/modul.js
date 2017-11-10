var pcs = pcs || {};

pcs.messagebox = (function () {
    "use strict";
    
     var span;
     var input;
     var count=1;

    function createElement(type) {
        return document.createElement(type);
    }

    function inputText(){
       
        var div = createElement("div");
        input = createElement("input");
        var buttonDiv = createElement("div");
        var okButton = createElement("button");
        var modulDiv = createElement("div");
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
        div.style.height = '80px';
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
            div.style.zIndex = count+1;
            modulDiv.style.zIndex = count;
            
            document.body.appendChild(modulDiv);
            
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
        div.style.backgroundColor = 'lightGreen';
        div.style.padding = '20px';
        div.style.width = '400px';
        div.style.height = '100px';
        div.style.border = '1px solid blue';
        div.style.position = 'relative';
        div.style.left = '50%';
        div.style.top = '50%';
        div.style.marginLeft = '-200px';
        div.style.marginTop = '-50px';
        div.style.boxSizing = 'border-box';
        div.style.display = 'inline-block';

        buttonDiv.style.position = 'absolute';
        buttonDiv.style.bottom = '6px';
        buttonDiv.style.textAlign = 'center';
        buttonDiv.style.width = '100%';
        buttonDiv.style.marginLeft = '-20px';

        okButton.addEventListener("click", function () {
            document.body.removeChild(div);
            
        });
    }

    return {
        inputText: inputText,
        show: show
    };
}());