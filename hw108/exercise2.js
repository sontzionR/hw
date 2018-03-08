// console.log(process.argv[0]);
// console.log(process.argv[1]);
// console.log(process.argv[3]);
// console.log(process.argv[4]);

let a = 0;

for (var i = 2; i < process.argv.length; i++) {
    a += (+process.argv[i]);
}

console.log(a);