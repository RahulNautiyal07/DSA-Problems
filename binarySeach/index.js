var searchInsert = function(A, B) {
    let l = 0;
    let length = A.length; 
    let h = length - 1;
    // let mid = Math.ceil((h-l)/2)
    let mid ;
    while(l<=h){
        mid = Math.ceil((h + l)/2)
        if(A[mid] === B){ return mid}
        if(A[mid] > B){
            h = mid - 1;
        }else{
            l = mid + 1;
        }
    }
    console.log(mid)
    if(mid === length -1 && A[mid] < B ){
        return mid + 1;
    }
    // else if( length === 1 && A[mid] > B){
    //     return mid
    // }
    else if( length > 1 && A[mid] < B){
        return mid + 1
    }
    return mid
    

};

console.log(searchInsert([1,3,5,6],2))

// console.log(1-'')