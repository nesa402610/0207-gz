// 8.	Есть  массив goods. Сколько в нем элементов – не знаем, количество элементов и сами элементы формируются случайным образом. Количество – [2, 20], элементы – [-20, 50].  Прочитать количество из goods.length.Напишите код для получения последнего элемента.

const arr = []; // пустой массив
// цикл, который создает от 2 до 20 элементов
for (let i = 0; i < (Math.random() * (20 - 2) + 2).toFixed(0); i++) {
    arr.push((Math.random() * (50 - -20) + -20).toFixed(0)); // помещаем в массив элементы от -20 до 50
}
console.log(arr[arr.length - 1]); // выводим последний элемент. мы знаем его длину, а послдений элемент это длина массива -1