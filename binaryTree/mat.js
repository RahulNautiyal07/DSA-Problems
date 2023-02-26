function a(A){
    let min = A.length;
    let obj = {};
    for (let i = 0; i < A.length; i++) {
        if(obj[A[i]]) {
            let val = i - obj[A[i]] -1
            if (min > val) {
                min = val;
            }
        } else {
            obj[A[i]] = i+1;
        }
    }
    
        return min
}
console.log(a([1,1]))


obj2={
    '1': 3,
}

if(obj2['1']){
    console.log('hhh')
}