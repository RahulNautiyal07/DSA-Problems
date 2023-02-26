let A = [2,3,8,9,13];
let B = 3

function merge(A,S,M,E){  
    let p1=S, p2=M+1, p3 = E;
    let C = []; 
    while(p1 <= M && p2 <= E){
        if(A[p1] < B[p2]){
            C[p3] = A[p1];
            p1++;
            p3++;
        } else {
            C[p3] = B[p2];
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
        C[p3] = B[p2];
            p2++;
            p3++; 
    }

   for(let i = 0; i< C.length; i++){
       A[S+i] = C[i]
   }      
}
let S = 0;
let N = A.length;
let E = N-1

let CC = mergeSort(A,S,E);
function mergeSort(A,S,E){
    if(S==E) return ;
    let M = Math.floor((S+E)/2);
    mergeSort(A,S,M);
    mergeSort(A,M+1,E);
    merge(A,S,M,E);
}
console.log(CC);