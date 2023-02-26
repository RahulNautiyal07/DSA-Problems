function subSum(A,B){
     let n = A.length;
    let l = 0, r = 0;
    let sum = A[l];
    while (r < n && l <= r) {
        if (sum == B) {
            let ans = [];
            for (let i = l; i <= r; i++) 
                ans.push(A[i]);
            return ans;
        } else if (sum < B) {
            r++;
            if (r < n) sum += A[r];
        } else {
            sum -= A[l];
            l++;
            if (l > r && l < n - 1) {
                r++;
                sum += A[r];
            }
        }
    }
    return -1;


}
let A = [ 5, 10, 20, 100, 105 ];
let B = [ 2, 3, 1, 2 ];
let test2 = subSum(A,110) 
console.log(test2);