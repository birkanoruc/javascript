class UI {
    constructor() {
        this.outputImage = document.getElementById("outputImage");
        this.outputLanguage = document.getElementById("outputLanguage");
        this.outputWord = document.getElementById("outputWord");
        this.languageList = document.getElementById("language");
    }

    changeUI() {
        this.outputImage.src = `images/${this.languageList.value}.png`;
        this.outputLanguage.innerHTML = this.languageList.options[this.languageList.selectedIndex].textContent;
    }

    displayTranslate(word) {
        this.outputWord.textContent = word;
    }
}