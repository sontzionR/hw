let fs = require('fs');
let fileContants = fs.readFileSync(process.argv[2]);
console.log(fileContants.toString().split('\n').length-1);


