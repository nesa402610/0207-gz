//4.	Написать функцию, которая выводит в браузер номера всех вхождений символа в строку. Строка и искомый символ вводятся в диалоговом окне.

let line = prompt('Введите строку')
let find = prompt('Какой символ ищем?')
let arr = []
function finda(sym) {
        arr.push(line.split('').find(el => el === sym));

}

console.log(arr.join(''));

finda(find)

