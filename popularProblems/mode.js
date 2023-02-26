function mode(A,B){
    // let i = 0;
    // let j = i;
    // console.log(j)
    // let sum = 0;
    // let pifixSum = 0;
    // let pfSum = [];

    // for(let k = 0; k<A.length; k++){
    //    sum+=A[k];
    //    pfSum.push(sum);
    // }

    // while(i<pfSum.length){
    //     if(i==0){
    //         console.log(pfSum[j])
    //         pifixSum+=pfSum[j];
    //         j++;
    //     }
    //     else if(j==pfSum.length){
    //     i++;
    //     j = i;
    //     }else{
    //         console.log(pifixSum,pfSum[i]);
    //         pifixSum= pifixSum + (pfSum[j] - pfSum[i-1]);
    //         j++; 
    //     }
    //  }

    // return pifixSum;
    let result = [];
    let i = 0;
    while(i<A.length){
        for(let j=0;j<B.length;j++){
            console.log(A[i],B[j])

            if(A[i]==B[j]){
                result.push(B[j]);
                i++;
                
            }else{
                continue;
            }
        }
        i++;
    }
    return result;
}

let A = [ 1, 2, 2, 1 ];
let B = [ 2, 3, 1, 2 ];
let test2 = mode(A,B) 
console.log(test2);