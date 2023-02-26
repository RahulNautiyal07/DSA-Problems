function rev(A) {
    let temp;
    let n = A.length;
    let i = 0;
    let j = n-1;
    while(i<j) {
        console.log("hello",A[i])

        // if(i==j){break;}
        temp = A[i];
        A[i] = A[j];
        A[j] = temp;
        i++;
        j--;
    }
  console.log(A);
}
const test = rev([-1, 2, 3, 3, 4, 5, 6]);
console.log(test);