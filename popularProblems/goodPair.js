function goodPair(A,B){
    let i = 0;
    let j = A.length-1;

    while(i<=A.length-2){
        if(j==i){
            console.log("iter", i,j);
            j= A.length-1;
            i++;
        }
        else if(A[i]+A[j]==B){
            return 1;
        }else{
            j--;
        }
    }
    return -1;

}

const test = goodPair([1,2,3,4,2,1],7);
console.log(test);