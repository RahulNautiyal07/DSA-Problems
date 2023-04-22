function LogestPalindrome(s){
    let max = Number.MIN_SAFE_INTEGER;
    let palindromeStr = "";
  
    for(let i = 0; i < s.length; i++){
        
        if(max > s.length - i){
            break;
        }
        
        let forward = "";
        let reverse = "";
      
        for(let j = i; j < s.length; j++){
            //Forward substring
            forward = forward + s[j];
            //Reverse substring
            reverse = s[j] + reverse;
            console.log(forward,i,reverse)

           
            if(forward === reverse && max < forward.length){
                max = forward.length;
                palindromeStr = forward;
            }
        }
    }
  
    return palindromeStr;
}
let str = "mmpqrstrtsuuuu"
console.log(LogestPalindrome(str))