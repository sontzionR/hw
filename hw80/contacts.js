(function () {
    "use strict";
    
    function get(id) {
        return document.getElementById(id);
    }
    var contactTable = get("contactTable");
    var contacts = [];
    var first = get("first");
    var last = get("last");
    var phone = get("phone");
    var email = get("email");
    var add = get("add");

    function addContact() {
    
        var contact = {
            firstName: first,
            lastName: last,
            email: email,
            phone: phone
        };

        contacts.push(contact);

        if (contacts.length === 1 ) {
            contactTable.deleteRow(1);
        }

    
        var row = contactTable.insertRow();
        var firstNameCell = row.insertCell();
        var lastNameCell = row.insertCell();
        var phoneCell = row.insertCell();
        var emailCell = row.insertCell();
        
        firstNameCell.innerHTML = first.value;
        lastNameCell.innerHTML = last.value;
        phoneCell.innerHTML = phone.value;
        emailCell.innerHTML = email.value;  
    }

    function emptyField() {

       first.value = ""; 
       last.value = "";
       phone.value = "";
       email.value = "";
      
    }

   
    add.addEventListener("click",addContact);   
    add.addEventListener("click",emptyField);
        
    // if(first.innerHTML.length > 0){
    // get("add").addEventListener("click",addContact);
    //  get("add").addEventListener("click",emptyField);
    // }
    //  else if(first.innerHTML === ""){
    //     get("add").removeEventListener("click",addContact);
    // }
    // //   get("theForm").addEventListener("submit",function(event){
    // //   event.preventDefault();      
    //   });
   
}());