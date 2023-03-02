// You are given a string A.
// An operation on the string is defined as follows:
// Remove the first occurrence of the same consecutive characters. eg for a string "abbcd", the first occurrence of same consecutive characters is "bb".
// Therefore the string after this operation will be "acd".
// Keep performing this operation on the string until there are no more occurrences of the same consecutive characters and return the final string.


function sol(A){
    let stack = [];
    for(let i = 0; i< A.length;i++){
        if(stack.length == 0){
            stack.push(A[i]);
        }else{
            if(A[i] == stack[stack.length -1]){
                stack.pop()
            }else{
                stack.push(A[i])
            }
        }  
    }
    let result ='';
    stack.forEach((res)=>{
        result+=res;
    })
    return result;
}
let A = "abccbc";
let B = "ddbbcgffe"
console.log(sol(A)); // expected : ac
console.log(sol(B)); // expected : cge
