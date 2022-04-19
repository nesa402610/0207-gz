// ==UserScript==
// @name         YandexBot
// @namespace    https://dark-souls.ru/
// @version      0.1
// @description  try to take over the world!
// @author       Ferris Argyle
// @match        https://yandex.ru/*
// @icon         data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
// @grant        none
// ==/UserScript==
const getRandom = (min, max) => {
    return Math.floor(Math.random() * (max - min) + min);
};
const keywords = ["купля-продажа авто",
    "каталог автомобилей",
    "автомобили купить"];
let keyword = keywords[getRandom(0, keywords.length)];

const input = document.getElementById('text');

if (location.pathname === '/') {
    input.click();
    input.value = keyword;
    setTimeout(() => {
        const submit = document.getElementsByClassName('button mini-suggest__button button_theme_search button_size_search i-bem button_js_inited')[0];
        submit.click();
    }, 200);
}
const links = document.links;


for (let i = 0; i < links.length; i++) {
    if (links[i].href.indexOf("auto.ru") !== -1) {
        let link = links[i];
        link.removeAttribute('target');
        link.click();
        console.log(link);
        break;
    }
}