"usestrict";
var account1 = {
    balance:100
};

var account2 = {
    balance:200
};

function addInterest(interest){
    this.balance = this.balance + (interest/100);
  
}
