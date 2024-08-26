"use strict";

const amountElement = document.getElementById("amount");
const mainCurrency = document.getElementById("mainCurrency");
const targetCurrency = document.getElementById("targetCurrency");
const currency = new Currency("USD", "TRY");
const ui = new UI(mainCurrency, targetCurrency);

function eventListeners() {
    document.addEventListener("input", exchangeAmount);
    mainCurrency.onchange = function () {
        currency.changeMainCurrency(mainCurrency.options[mainCurrency.selectedIndex].textContent);
        ui.changeMainCurrency();
    };
    targetCurrency.onchange = function () {
        currency.changeTargetCurrency(targetCurrency.options[targetCurrency.selectedIndex].textContent);
        ui.changeTargetCurrency();
    }
};

function exchangeAmount() {
    currency.changeAmount(amountElement.value);

    currency.exchange()
        .then(result => {
            console.log(result);
            ui.displayResult(result);
        })
        .catch(err => console.log(err));
}

eventListeners();