let A =  [ 8, 16, 80, 55, 32, 8, 38, 40, 65, 18, 15, 45, 50, 38, 54, 52, 23, 74, 81, 42, 28, 16, 66, 35, 91, 36, 44, 9, 85, 58, 59, 49, 75, 20, 87, 60, 17, 11, 39, 62, 20, 17, 46, 26, 81, 92 ];
let B = 9;

function merge(A,S,M,E){  
    let p1=S, p2=M+1, p3 = 0;
    let C = []; 
    while(p1 <= M && p2 <= E){
        if(A[p1] < A[p2]){
            C[p3] = A[p1];
            p1++;
            p3++;
        } else {
            C[p3] = A[p2];
            p2++;
            p3++;
        }
    }

    while(p1 <= M){
        C[p3] = A[p1];
            p1++;
            p3++; 
    }

    while(p2 <= E){
        C[p3] = A[p2];
            p2++;
            p3++; 
    }

   for(let i = 0; i<=E-S; i++){
       A[S+i] = C[i]
    //    console.log(A[S+i])
   } 
}
let S = 0;
let N = A.length;
let E = N-1

mergeSort(A,S,E);
function mergeSort(A,S,E){
    if(S==E) return ;
    let M = Math.floor((S+E)/2);
    mergeSort(A,S,M);
    mergeSort(A,M+1,E);
    merge(A,S,M,E);
}

console.log( A);
