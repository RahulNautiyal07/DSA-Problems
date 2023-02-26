function solve(abc) {
    // console.log(abc)
    let str = "";
    str=reverse(abc, 0, abc.length - 1);
    // console.log(str,"Hello")
    let web ="";
    let i = 0, j = 0;
    while (j < str.length) {
        if (j == str.length - 1 && str[j] != ' ') {
            web+=reverse(str, i, j);
            j++;

        }
        if (j < str.length && str[j] == ' ') {
          web += reverse(str, i, j - 1)+ " ";
            i = j + 1;
            j = j + 1;
        }
        j++;
    //  console.log(str,"hello")

    }
    function reverse(str, i, j) {
        let word = "";
        for (let k = j; k >= i; k--) {
            word += str[k];
        }
        // console.log(word)
        return word;
    }
    return web;
}
const test = solve("Rahul is this");
console.log(test);


// let a ="abcdef";
// let temp ;
// temp = a[2];
// a[2] = a[3];
// a[3] = temp;
// console.log(a)

let arr = [{name:"rahul1",age:23},{name:"rahul2",age:23},{name:"rahul4",age:23},{name:"rahul3",age:23}]

const arr2 = arr.map(({name})=>{return {fullname:name,text:name}});

console.log(arr2);