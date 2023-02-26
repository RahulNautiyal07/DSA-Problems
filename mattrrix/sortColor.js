function sortColor(A) {
    let n = A.length;
    let i = 0;
    let j = n - 1;
    let temp ;
  console.log(j)
    while (i<=n-1) {
        if (i >= j) {
            j = n - 1;
            i++;
        }
        else if (A[i] > A[j]) {
            temp = A[i];
            A[i] = A[j];
            A[j] = temp;
            j--;
        }
        else if(A[i]==A[j]){
            j--;
        }
        else{
            j--;
        }
        console.log(A,j,"Hello")

    }
    return A;
}

let test = sortColor([0,3,6,0,1]);
console.log(test);