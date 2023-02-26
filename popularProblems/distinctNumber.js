let  abc = (arr, k)  => {
    let obj = {};
    let newArr = [];
    let j = 0;
    let count = 0;

    for (let i = 0; i < k; i++) {
        if (obj[arr[i]]) {
            obj[arr[i]] = obj[arr[i]] + 1;
        } else {
            obj[arr[i]] = 1;
            count++;
        }
    }
    newArr.push(count);

    for (let i = k; i < arr.length; i++) {
        if (j <= arr.length - k) {
            if (obj[arr[j]] > 1) {
                obj[arr[j]] = obj[arr[j]] - 1;
            } else if (obj[arr[j]] == 1) {
                delete obj[arr[j]];
                count --;
            }
            if (!obj[arr[i]]) {
                obj[arr[i]] = 1;
                count++;
            }
            else {
                obj[arr[i]] = obj[arr[i]] + 1;
            }
            j++;
            newArr.push(count);
        }
    }
    return newArr;
}
let arr = [1, 2, 1, 3, 4, 3,6,7]
console.log(abc(arr,3))