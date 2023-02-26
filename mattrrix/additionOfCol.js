function transpose(A) {
    let C = [];
    for (let i = 0; i < A[0].length; i++) {
        let sum = 0;
        for (let j = 0; j < A.length; j++) {
            sum+=A[j][i];
        }
        C.push(sum)
    }
    return C;
}

let x = transpose([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);
console.log(x);