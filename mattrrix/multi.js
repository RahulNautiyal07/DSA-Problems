function transpose(A, B) {
    let C = [];
    for (let i = 0; i < A[0].length; i++) {
        let D = [];
        for (let j = 0; j < A.length; j++) {
            let sum = 0;
            for(let k = 0; k < A.length; k++ ){

               sum += A[i][k] * B[k][j];
            }
            D.push(sum);
        }
        C.push(D);
    }
    return C;
}

let x = transpose([[1, 2], [4, 5]], [[1, 3], [2, 2]]);
console.log(x);