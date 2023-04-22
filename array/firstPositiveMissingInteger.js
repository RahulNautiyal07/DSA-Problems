
// First Missing Positive

// Given an unsorted integer array nums, return the smallest missing positive integer.

// You must implement an algorithm that runs in O(n) time and uses constant extra space.

// Example 1:

// Input: nums = [1,2,0]
// Output: 3
// Explanation: The numbers in the range [1,2] are all in the array.
// Example 2:

// Input: nums = [3,4,-1,1]
// Output: 2
// Explanation: 1 is in the array but 2 is missing.
// Example 3:

// Input: nums = [7,8,9,11,12]
// Output: 1
// Explanation: The smallest positive integer 1 is missing.
 

var firstMissingPositive = function(nums) {
    let A = nums;
    let bool = new Array(A.length).fill(false);
    let count = 0;
    let len = A.length;
    
     for(let i = 0; i< len; i++){
         if(A[i] > 0 && A[i] <=len){
             bool[A[i]-1] = true;
         }
     }

     for(let i = 0; i< bool.length; i++){
         if(bool[i] == false){
             return i+1;
         } else{
             count = count + 1;
         }
     } 
    
     return count+1;
    
};