'use strict';

const betweenEl = document.querySelector(".between");
const againEl = document.querySelector(".again");
const numberEl = document.querySelector(".number");
const guessEl = document.querySelector(".guess");
const runEl = document.querySelector(".run");
const messageEl = document.querySelector(".message");
const clueEl = document.querySelector(".clue");
const scoreEl = document.querySelector(".score");
const topScoreEl = document.querySelector(".top-score");
const bodyEl = document.querySelector("body");

let secretNumber, score, topScore;

const init = function () {
    secretNumber = Math.trunc(Math.random() * 20) + 1;
    score = 20;
    topScore = 20;
}

init();

const getClue = function (guess, secretNumber) {
    return guess > secretNumber ? "Daha düşük bir sayı tahmin etmelisin." : "Daha yüksek bir sayı tahmin etmelisin."
}

const getTopScore = function (score, topScore) {
    return score > topScore ? score : topScore;
}

runEl.addEventListener('click', function () {

    const guess = Number(document.querySelector('.guess').value);

    if (!guess || guess > 20 || guess < 1) {
        guessEl.value = "";
        numberEl.textContent = "?";
        clueEl.textContent = "";
        messageEl.textContent = "Lütfen 1 ile 20 arasında tahmin ettiğiniz sayıyı giriniz!";
        bodyEl.style.backgroundColor = "#222";
    } else if (guess === secretNumber) {
        score += 5;
        scoreEl.textContent = "Skor: " + score;
        messageEl.textContent = "Doğru tahmin! 5 puan kazandınız!";
        bodyEl.style.backgroundColor = "#60b347";
        numberEl.textContent = secretNumber;
        clueEl.textContent = "";
        guessEl.value = "";
        topScoreEl.textContent = "En Yüksek Skor: " + getTopScore(score, topScore);
        secretNumber = Math.trunc(Math.random() * 20) + 1;
    } else if (guess !== secretNumber) {
        score -= 5;
        scoreEl.textContent = "Skor: " + score;
        messageEl.textContent = "Yanlış tahmin! 5 puan kaybettiniz!";
        bodyEl.style.backgroundColor = "#fb3b34";
        numberEl.textContent = "?";
        clueEl.textContent = getClue(guess, secretNumber);
        guessEl.value = "";

        if (score < 5) {
            messageEl.textContent = "Oyunu bitti. Kaybettin!";
            numberEl.textContent = secretNumber;
            score = 20;
            scoreEl.textContent = "Skor: " + score;
            clueEl.textContent = "";
            guessEl.value = "";
            bodyEl.style.backgroundColor = "#222";
            secretNumber = Math.trunc(Math.random() * 20) + 1;
        }
    }
});

againEl.addEventListener("click", function () {
    messageEl.textContent = "Lütfen 1 ile 20 arasında tahmin ettiğiniz sayıyı giriniz!";
    numberEl.textContent = "?";
    score = 20;
    scoreEl.textContent = "Skor: " + score;
    clueEl.textContent = "";
    guessEl.value = "";
    bodyEl.style.backgroundColor = "#222";
    secretNumber = Math.trunc(Math.random() * 20) + 1;
});