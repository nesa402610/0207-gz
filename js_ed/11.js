//11.	Напишите функцию randomInteger(min, max) для генерации случайного целого числа между min и max, включая min,max как возможные значения. Любое число из интервала min..max должно иметь одинаковую вероятность. Использовать функцию floor

function randomInteger(min, max) {
    // вывод в консоль
    console.log(Math.floor(Math.random() * (max + 1 - min) + min));
    //max+1 тк не выводится 22

}

// вызов
randomInteger(10.1, 22.2);