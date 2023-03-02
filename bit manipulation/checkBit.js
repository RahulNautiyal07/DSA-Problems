


///Check I th bit set or unset (Means 0 or 1)
function checkBit(N,i){
    if((N >> i) & 1 == 1) { // with & 1 operator you can get the last digit 
        return true;
    } else { 
        return false
    }
}
console.log(checkBit(8,3))  // true
console.log(checkBit(12,3)) //true
console.log(checkBit(4,3)) // false
console.log(6|7) // false

