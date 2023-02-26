let A = [ 1, 2, 3, 4, 5 ];
function a(){
A.sort((a,b) => { return a-b});
let p1 = 0;
console.log(p1)
for(let i = 1;i < A.length; i++){
    if(A[i] == A[p1]+1){
        p1++;;
        console.log("Hello")
    }else{
        return 0;
    }
} 
return 1;
}
console.log(a(A))