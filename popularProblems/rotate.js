function solve(A, B) {
    let arr = [];

    for (let i = 0; i < B.length; i++) {
        
        let D = Object.assign([],A);
     
        let n =  B[i]% A.length;
        console.log("mod",n,D)
        let k = 0;
        let j = A.length - 1;
        swap(D,k,j);
        console.log("12",D)
        swap(D,j-n+1,j);
        console.log("123",D)

       swap(D,k,j-n);
       console.log("1234",D)

       arr.push(D);
    //   console.log(C);

    }

   
    function swap(C, i, j) {
         let temp;
        console.log("i :",i," j :", j);
        while (i <= j) {
            temp = C[i];
            C[i] = C[j];
            C[j] = temp;
            i++;
            j--;
        }
        return C
    }
    
    return arr;

}
const test = solve([1, 2, 3, 4, 5, 6], [2, 3]);
console.log(test);