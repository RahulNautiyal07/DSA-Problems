// console.log(a+b)
let A= 'ah'
// console.log(Number.MIN_SAFE_INTEGER);
class Student{
 #name = "rahul";
 age =17;
 abc = ()=>{
 console.log(this.age)
 console.log(this.#name)
 this.#run();
 }

 #run(){
    
    console.log('running',this.#name,this.age)
 }
 
}

// const student1 = new Student();
// console.log(student1.name,"hello1 ");
// console.log(student1.age,"hello2 ");
// // console.log(student1.run(),"hello 3");
// console.log(student1.abc(),"hello 4");
// console.log((11).toString(2))

// let a = (11).toString(2);
// console.log(countOneBit(11))

// function countOneBit(num) {
//     let count = 0;
//     let a = (num).toString(2);
//     for(let i = 0; i<a.length; i++){
//         if(a[i]==1){
//             count++;
//         }
//     }
//  return count;
// } 
// let b = 5;

// console.log(b>>2)

function AddTwoString(a,b){
    var result = "";
     
    var s = 0;        
 
    var i = a.length - 1, j = b.length - 1;
    while (i >= 0 || j >= 0 || s == 1)
    {

        s += ((i >= 0)? a.charAt(i).charCodeAt(0) -
        '0'.charCodeAt(0): 0);
        console.log( a.charAt(i).charCodeAt(0) ,
        '0'.charCodeAt(0))
        s += ((j >= 0)? b.charAt(j).charCodeAt(0) -
        '0'.charCodeAt(0): 0);
 
        result = String.fromCharCode(parseInt(s % 2) +
        '0'.charCodeAt(0)) + result;
 
        s = parseInt(s/2);
         i--; j--;
    }
     
return result;
}

AddTwoString('100','11')//111

// public_html/.well-known/acme-challenge


