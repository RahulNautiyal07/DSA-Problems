function test(x, y){
    console.log(x,y)
    if(x && y) return x+y;
    else return (y) => { return x+y;  }
  }
// console.log(test(5)(4))

// console.log(true+true)

function main(n){
    let newArr = []
    let val = 0
    for(let i = 1;i<=n;i++){
        newArr.push(val+=i)
    }
    return newArr[n-1]
}
// console.log(ad(5))


function mai(n,obj){
    let newArr = [n];
    let count = 1;
   while(n>=1){
       if(n==1){
           return count;
       }
       else if(n%2==0){
           n=n/2;
           if(obj[n]){
               return count+obj[n]
           }
            count++;
        }else{
            n=3*n+1;
            if(obj[n]){
                return count+obj[n]
            }
            count++;
        }
    }
}

function maxLength(n){
    let max = 0;
    let num = 0;
    let obj = { };

    for(let i = 1 ;i<=n;i++){
        let value = mai(i,obj)
        obj[i] = value;
        if(value>max){
            num = i
            max = value;
        }
    }
    return num;
    
}
console.time("start");
console.log(maxLength(1000000))
console.timeEnd("start");


// praveen.kumar@xuresolutions.in


function ArrayChallenge(arr) { 
    let obj ={};
    let max = 0;
    for(let i = 0; i<arr.length;i++){
        if(obj[arr[i]]){
          obj[arr[i]]++;
        }else{
          obj[arr[i]]=1;
        }
    }
    for(let i = 0; i<arr.length;i++){
        if(obj[arr[i]]>max && obj[arr[i]]>1){
         max = obj[arr[i]];
        }
    }
  
    // code goes here  
    return max; 
    
  
  }

 console.log( ArrayChallenge([0,-2,-2,5,5,5]));