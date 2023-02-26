// for(let i = 1; i <5; i++){
//     setTimeout(()=>{
//         console.log(i)
//     },1000)
// }
// console.log("hello")
// function convertStoI() {
//     var r = parseInt("1011", 2);
//     var k = parseInt("234",4);

//    console.log('Integer value is ' + r);
//    console.log("<br>");
//    console.log("integer value is " + k);
//    console.log("<br>");
//    console.log(parseInt("528GeeksforGeeks"));

// }

// let myUrl = new URLSearchParams('https://google.com?x="22"&y="222"').get(y);
// console.log(myUrl)
// convertStoI();

// var x =10;
// A();
// B();
// function A(){
//     var x=20
//     // console.log(this.queueMicrotask.queueMicrotask())
//     console.log(x);
// }

// function B(){
//     console.log(x);
// }

// var C = () => {

//     console.log(x)
// }
// C();

let x = 10;
let y = 5;
// class Rahul {
//     constructor(x,y){
//         this.x = x;
//         this.y = y;
//         this.A = (d) => {
//             console.log(d)
//             console.log(this);
//         }
//     }

//     B(){
//         console.log(this.x)
//         console.log(this,'xxxx')
//     }

//     C(){
//         console.log(this.y)
//         console.log(this,'xxxx')
//     }
// }
// console.log(this)
// const Obj1 = new Rahul(2,4);

// Obj1.A(12);

let obj = {
  x: 20,
  y: 10,
  a:async function () {
    return await setImmediate(() => {
      console.log("x", x);
    }, "setImmediate");
  },
  c: function () {
    return new Promise((resolve, reject) => {
      if (y) {
        for (let i = 0; i < 5000; i++) {
          console.log("promise2");
        }
        resolve(this.y);
      } else {
        reject("X is not defined");
      }
    });
  },
  b:async function () {
    return await setImmediate(() => {
      for (let i = 0; i < 100; i++) {
        console.log("hello");
      }
    }, "setImmediate");
  },
};
obj.b();
obj.a();

// obj.c().then(console.log);

// obj2= {
//     x : 30
// }
// obj.a.bind(obj2)
// console.log(c.a())

// let choclate = 10;
// choclate--;
// let fridge = (num) => { 
//     return new Promise((resolve,reject)=>{
//         if(choclate>0){
//             choclate -=num;
//             resolve(choclate);
//         } else{ 
//             reject('You dont have enough choclates')
//         }
//     re
// })}

// console.log(fridge(2).then(console.log));
// console.log(fridge(4).then(console.log));
// console.log(fridge(2).then(console.log));

