// 9.	Создайте функцию find(arr, value), которая ищет в массиве arr значение value и возвращает его номер, если найдено, или -1, если не найдено.

// создаем функцию
function find(arr, value) {
    console.log( arr.findIndex(el => el === value)) // вывод в консоль индекса, если нашли, иначе -1
}

find([1, 5, 3, 2], 44)