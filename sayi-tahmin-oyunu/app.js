'use strict';

let secretNumber = Math.trunc(Math.random() * 20) + 1;
let score = 20;
let topScore = 20;

const changeTextContent = function (querySelector, message) {
    document.querySelector(String(querySelector)).textContent = message;
};

const changeValue = function (querySelector, value) {
    document.querySelector(String(querySelector)).value = value;
};

const changeBackgroundColor = function (querySelector, color) {
    document.querySelector(String(querySelector)).style.backgroundColor = color;
};

const getClue = function (guess, secretNumber) {
    return guess > secretNumber ? "Daha düşük bir sayı tahmin etmelisin." : "Daha yüksek bir sayı tahmin etmelisin."
}

const getTopScore = function (score, topScore) {
    return score > topScore ? score : topScore;
}

document.querySelector('.run').addEventListener('click', function () {

    const guess = Number(document.querySelector('.guess').value);

    if (!guess || guess > 20 || guess < 1) {
        changeValue(".guess", "");
        changeTextContent(".number", "?");
        changeTextContent(".clue", "");
        changeTextContent(".message", "Lütfen 1 ile 20 arasında tahmin ettiğiniz sayıyı giriniz!");
        changeBackgroundColor("body", "#222");

    } else if (guess === secretNumber) {
        score += 10;
        changeTextContent(".score", "Skor: " + score);
        changeTextContent(".message", "Doğru tahmin! 10 puan kazandınız!");
        changeBackgroundColor("body", "#60b347");
        changeTextContent(".number", secretNumber);
        changeTextContent(".clue", "");
        changeValue(".guess", "");
        changeTextContent(".top-score", "En Yüksek Skor: " + getTopScore(score, topScore));
        secretNumber = Math.trunc(Math.random() * 20) + 1;

    } else if (guess !== secretNumber) {
        score -= 10;
        changeTextContent(".score", "Skor: " + score);
        changeTextContent(".message", "Yanlış tahmin! 10 puan kaybettiniz!");
        changeBackgroundColor("body", "#fb3b34");
        changeTextContent(".number", "?");
        changeTextContent(".clue", getClue(guess, secretNumber));
        changeValue(".guess", "");

        if (score < 10) {
            score = 20;
            changeTextContent(".score", "Skor: " + score);
            changeTextContent(".message", "Oyunu bitti. Kaybettin!");
            changeBackgroundColor("body", "#222");
            changeTextContent(".clue", "");
            changeValue(".guess", "");
            secretNumber = Math.trunc(Math.random() * 20) + 1;
        }

    }

});


document.querySelector(".again").addEventListener("click", function () {
    score = 20;
    changeTextContent(".score", "Skor: " + score);
    changeValue(".guess", "");
    changeTextContent(".number", "?");
    changeTextContent(".clue", "");
    changeTextContent(".message", "Lütfen 1 ile 20 arasında tahmin ettiğiniz sayıyı giriniz!");
    changeBackgroundColor("body", "#222");
    secretNumber = Math.trunc(Math.random() * 20) + 1;
});