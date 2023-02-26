function transpose(A, B) {
    let C = [];
    for (let i = 0; i < A[0].length; i++) {
        let D = [];
        for (let j = 0; j < A.length; j++) {
            D.push(A[i][j] - B[i][j]);
        }
        C.push(D);
    }
    return C;
}

let x = transpose([[1, 2, 3], [4, 5, 6], [7, 8, 9]], [[9, 2, 9], [5, 1, 3], [3, 7, 6]]);
console.log(x);