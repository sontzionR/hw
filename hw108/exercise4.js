let fs = require('fs');
 let fileContants = fs.readFile(process.argv[2],(err, data)=>{
//  let fileContants = fs.readFile(process.argv[2],(err, fileContants)=>{
    if(err){
        console.log('oops!',err);
    }else{
        //   console.log(fileContants.toString().split('\n').length-1);
        console.log(data.toString().split('\n').length-1);
    }

});



