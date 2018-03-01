let a = 3;
console.log(a);
function paradise(first,...arg){
    for(let val of arg){
        console.log(val);
    }
}

paradise(0,1,2,3,4,5,6,7); //输出8，8个数组元素
