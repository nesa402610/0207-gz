//10.	Напишите функцию randomInteger(min, max) для генерации случайного целого числа между min и max, включая min,max как возможные значения. Любое число из интервала min..max должно иметь одинаковую вероятность. Использовать функцию round
// функция
function randomInteger(min, max) {
    // вывод в консоль
    console.log(Math.round(Math.random() * (max - min) + min));
}
// вызов
randomInteger(10, 22);