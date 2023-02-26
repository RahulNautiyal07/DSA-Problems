
function transpose(A,B) {
    let temp;
    let C =  [];
    for (let i = 0; i < A.length; i++) {
        let D =[]
        for (j = 0; j < A[i].length; j++) {
           D.push(A[i][j]+B[i][j])
        }
        C.push(D);
    }
    return C;
}

let x = transpose([[1, 2, 3], [4, 5, 6], [7, 8, 9]],[[1,2,3],[4,5,6],[7,8,9]]);
console.log(x);