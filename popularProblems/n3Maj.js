function majrority(A) {
    let maj1;
    let maj2;
    let count1 = 0;
    let count2 = 0;

    for (let i = 0; i < A.length; i++) {
        if (count1 == 0) {
            maj1 = A[i];
            count1 = 1;
            console.log("m1 is :", maj1)

        }
        else if (A[i] == maj1) {
            count1++;
            console.log(count1)
        } else if (count2 == 0) {
            // console.log(maj2)
            maj2 = A[i];
            count2 = 1;
            console.log("m2 is :", maj2)

        }
        else if (A[i] == maj2) {
            count2++;
        } else {

            count1--;
            count2--;
        }
    }
    if (count1 > 0) {
        return maj1;
    }
    else if (count2 > 0) {
        return maj2;
    } else {
        return -1
    }

}
let test = majrority([1,2,1,2,3,1,3,1,5]);
console.log(test);

