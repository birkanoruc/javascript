class UI {
    constructor(mainCurrency, targetCurrency) {
        this.mainCurrency = mainCurrency;
        this.targetCurrency = targetCurrency;

        this.outputFirst = document.getElementById("outputFirst");
        this.outputSecond = document.getElementById("outputSecond");
        this.outputResult = document.getElementById("outputResult");
    }

    changeMainCurrency() {
        this.outputFirst.textContent = this.mainCurrency.options[this.mainCurrency.selectedIndex].textContent;
    }

    changeTargetCurrency() {
        this.outputSecond.textContent = this.targetCurrency.options[this.targetCurrency.selectedIndex].textContent;
    }

    displayResult(result) {
        const data = result.result.data[0];

        this.outputResult.value = `${data.calculatedstr}`;
    }
}