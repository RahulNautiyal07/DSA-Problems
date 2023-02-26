

function subSum(A, B) {
    let set1 = new Set();
    if(A.length >1){
        console.log("hello",A.length)
    for (let i = 0; i < A.length; i++) {
            let d = B + A[i];
            console.log(d,"value is",A[i])
            if (set1.has(d)) {
                return 1;
            } else {
                 console.log(set1)
                set1.add(A[i]);
            }
        
    }
    
    
    
    }
    console.log(set1)
    return 0;

}
let A = [1, 3, 2 ];
let B = [2, 3, 1, 2];
let test2 = subSum(A,0)
console.log(test2);