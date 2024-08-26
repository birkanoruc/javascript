"use strict";

const word = document.getElementById("word");
const language = document.getElementById("language");
const ui = new UI();

function eventListeners() {
    document.getElementById("translate-form").addEventListener("submit", translateWord);
    document.getElementById("language").onchange = function () {
        ui.changeUI();
    };
}

eventListeners();

function translateWord(e) {
    e.preventDefault();
    const newTranslate = new Translate(word.value, language.value);
    newTranslate.translateWord(function (status, response) {
        if (status !== 200) {
            console.log(status, response);
        } else {
            ui.displayTranslate(response); // Çeviri sonucunu göster
        }
    });
}