// Given an expression string A, examine whether the pairs and the orders of “{“,”}”, ”(“,”)”, ”[“,”]” are correct in A.
// Refer to the examples for more clarity.

  function sol(A){
    let stack = [];
    let str = A;
    for(let i = 0; i < str.length; i++){
        if(stack.length == 0){
            stack.push(str[i]);
        } else{
            if(
               (str[i] == ")" && stack[stack.length-1] == "(")
            || (str[i] == "}" && stack[stack.length-1] == "{") 
            || (str[i] == "]" && stack[stack.length-1] == "[")
            ){
                stack.pop();
            } else {
                stack.push(str[i])
            }
        }
    }
    if(stack.length == 0) return 1;
    else return 0;
}

let A = "{([])}";
let B = "(){"
console.log(sol(A)); // expected : 1
console.log(sol(B)); // expected : 0
