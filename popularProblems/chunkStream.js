// console.log("What is your name?");

// process.stdin.once('data', (chunk) => {
//     let fname = chunk.toString();

//     console.log("Hello, " + fname + "!");
//     process.exit();

// });

// console.log("What is your  full name?");

//   process.stdin.once('data', (chunk) => {
//     let sname = chunk.toString().trim();
//     // console.log(sname)
//     let n = sname.length-1;
//     const lab= reverse(sname,n);
    
//     console.log(lab);
//     function reverse(chunk,n) {
//         if(n==0){
//         return chunk[0];
//         }
//         if(chunk[n]==''){
//             return reverse(chunk,n-1,);
//         }
//         return  chunk[n]+reverse(chunk,n-1,);

//     }
    
//     process.exit();

// });

// function reverse(chunk,n,str) {
//     if(n==0){
//     return chunk[0];
//     }
//     return  ""+ chunk[n]+reverse(chunk,n-1,);
// }
// let sname = "rahul";
// let n = sname.length-1;
// console.log(n,sname[n])
// let str = "";
// const lab= reverse(sname,n,str);
// console.log(lab)

function sum(n){
    if(n==1){
        return 1
    }
    return sum(n-1)* n;
}


 const test = sum(6);
console.log(test);