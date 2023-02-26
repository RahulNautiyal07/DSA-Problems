function nobleInteger(A) {
    let n = A.length;
    A.sort(function (a, b) { return b - a });
    console.log(A)
    for (let i = 0; i < n; i++) {
        if (i == A[i]) {
            return 1
        }
    }
    return -1;
}

const test = nobleInteger([-1, 2, 3,3, 4,5,6, 1,1]);
console.log(test);