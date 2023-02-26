function SubArraySum(arr, n) 
{ 
    let sum = 0,sum2 = 0;
    let pfSum = [];
    // Pick starting point 
    for (let i=0; i <n; i++) 
    { 
        sum =BigInt(sum) + BigInt(arr[i]);
         
    } 

    for(let i = 0; i<n; i++){
        for(let j = i; j<n; j++){
            if(i == 0){
                sum2 =BigInt(sum2) + BigInt(pfSum[j]);
                console.log([j])
            }
            else{
                sum2+=pfSum[j] - pfSum[i-1];
            }
        }
    }
    return sum2 ; 
} 



// Another approach
function SubArraySum2(arr, n) 
{ 
   let count = 0;
   for(let i = 0;i<n;i++){
       let right = n-1-i;
       let left = i;
       if(i==0){
           left=0;
       }
       count +=arr[i]*(1+left+right+left*right);
    //    console.log(count,left,right)

   }
   return count;
} 


let arr = [1, 2, 3] ; 
let n = arr.length; 
let test = SubArraySum2(arr,n)

console.log(test)