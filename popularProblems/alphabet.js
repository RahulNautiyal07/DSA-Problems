function toUpper(A){
    for(let i = 0;i<A.length;i++){
        if(A[i].charCodeAt(0)>=97 && A[i].charCodeAt(0)<=122){
            let b = A[i].charCodeAt(0);
            A[i] =String.fromCharCode(b - 32);
        }
    }
    return A
}

const test = toUpper(['S', 'c', 'A', 'L', 'E', 'r', 'A', 'c', 'a', 'D', 'e', 'm', 'y']);
console.log(test);


let test2 = power(2,4) 
console.log(test2);

function power(number,p){
    let pValue = 1;
    for(let i = 1; i<=p;i++){
        pValue = pValue * number;
    }
    return pValue;
}