//5.	Создайте функцию truncate(str), которая проверяет длину строки str, и если она превосходит 20 – заменяет конец str на "...", так чтобы ее длина стала равна 20.Результатом функции должна быть (при необходимости) усечённая строка.

function truncate(str) {
    if (str.length > 20) {
        console.log(str.substr(0, 19) + '...');
    }
}
truncate('Сосиска в тесте от бати')