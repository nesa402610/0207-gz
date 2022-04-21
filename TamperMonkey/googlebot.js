// ==UserScript==
// @name         Google bot
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  try to take over the world!
// @author       Ferris Argyle
// @match        https://www.google.com/*
// @match        https://napli.ru/*
// @match        https://motoreforma.com/*
// @icon         data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
// @grant        none
// ==/UserScript==
const getRandom = (min, max) => {
    return Math.floor(Math.random() * (max - min) + min);
};
function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}
const sites = {
    "napli.ru": ["10 самых популярных шрифтов от Google",
        "Отключение редакций и ревизий в WordPress",
        "Вывод произвольных типов записей и полей в WordPress",],
    "motoreforma.com": ["мотореформа", "прошивки для CAN-AM", "тюнинг Maverick X3", "вариатор CV-Tech"]
};
let site = Object.keys(sites)[getRandom(0, Object.keys(sites).length)];
let keywords = sites[site];
let keyword = keywords[getRandom(0, keywords.length)];
const input = document.querySelector('input');
const submit = document.getElementsByName('btnK')[1];
let links = document.links;

if (submit) {
    document.cookie = 'hostname=' + site
} else if (location.hostname == 'www.google.com') {
    site = getCookie('hostname')
} else {
    site = location.hostname
}

if (submit) {
    let i = 0;
    const timerID = setInterval(() => {
        input.value += keyword[i];
        i++;
        if (i === keyword.length) {
            clearInterval(timerID);
            submit.click();
        }
    }, 200);
} else if (location.hostname == site) {
    setInterval(() => {
        if (getRandom(0, 100) >= 90) {
            localStorage.removeItem('site');
            location.href = 'https://google.com';
        }
        let index = getRandom(0, links.length);
        if (links[index].href.indexOf(site) !== -1) links[index].click();

    }, getRandom(1500, 3000));
} else {
    let nextPage = true;

    for (let i = 0; i < links.length; i++) {
        if (links[i].href.indexOf(site) !== -1) {
            let link = links[i];
            link.removeAttribute('target');
            nextPage = false;
            setTimeout(() => link.click(), getRandom(1500, 4000));
            break;
        }
    }
    if (document.querySelector('.YyVfkd') && document.querySelector('.YyVfkd').innerText == '5') {
        nextPage = false;
        location.href = '/';
    }
    if (nextPage && document.getElementById('pnnext')) {
        setTimeout(() => {
            document.getElementById('pnnext').click();
        }, getRandom(1500, 4000));
    }
}



