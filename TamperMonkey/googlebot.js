// ==UserScript==
// @name         Google bot
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  try to take over the world!
// @author       Ferris Argyle
// @match        https://www.google.com/*
// @match        https://napli.ru/*
// @icon         data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
// @grant        none
// ==/UserScript==
const getRandom = (min, max) => {
    return Math.floor(Math.random() * (max - min) + min);
};

const keywords = ["10 самых популярных шрифтов от Google",
    "Отключение редакций и ревизий в WordPress",
    "Вывод произвольных типов записей и полей в WordPress"];
let keyword = keywords[getRandom(0, keywords.length)];
const input = document.querySelector('input');
const submit = document.getElementsByName('btnK')[1];
let links = document.links;
if (submit) {
    let i = 0;
    const timerID = setInterval(() => {
        input.value += keyword[i];
        i++;
        if (i === keyword.length) {
            clearInterval(timerID);
            submit.click();
        }
    }, 400);
} else if (location.hostname === 'napli.ru') {
    setInterval(() => {
        if (getRandom(0, 100) >= 90) location.href = 'https://google.com'
        let index = getRandom(0, links.length);
        if (links[index].href.indexOf('napli.ru') !== -1) links[index].click();

    }, getRandom(1500, 3000));
} else {
    let nextPage = true;

    for (let i = 0; i < links.length; i++) {
        if (links[i].href.indexOf("napli.ru") !== -1) {
            let link = links[i];
            link.removeAttribute('target')
            nextPage = false;
            setTimeout(() => link.click(), getRandom(1500, 4000));
            break;
        }
    }
    if (document.querySelector('.YyVfkd').innerText === '5') {
        nextPage = false;
        location.href = '/';
    }
    if (nextPage && document.getElementById('pnnext')) {
        setTimeout(() => {
            document.getElementById('pnnext').click();
        }, getRandom(1500, 4000));
    }
}



