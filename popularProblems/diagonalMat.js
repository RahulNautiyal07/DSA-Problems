function leader(A) {
    let n = A.length - 1;
    let i = n - 1;
    let j = n;
    let arr = [];
    arr.push(A[n]);

    while (i >= 0) {
        console.log("Hello1");

        if (j == n && A[j] < A[i]) {
            arr.push(A[i]);
            console.log("Hello");
            i--;
            j = i + 1;
        }
        else if(A[j] > A[i]) {
            console.log("Hello2");
            i--;
            j = i + 1;
        }else{
        j++;
        console.log(j)
        }
    }
    return arr;
}


const test = leader([1, 2, 3, 4, 2, 1]);
console.log(test);