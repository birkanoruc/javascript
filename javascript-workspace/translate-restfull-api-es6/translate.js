class Translate {
    constructor(word, language) {
        this.apikey = "Doc95XhNxyvwINkzf8vfcAAlOKW4pbT0";
        this.url = "https://api.apilayer.com/";
        this.word = word;
        this.language = language;
    }

    translateWord(callback) {
        const endpoint = `https://api.apilayer.com/language_translation/translate?source=tr&target=${this.language}`;

        const myHeaders = new Headers();
        myHeaders.append("apikey", this.apikey);

        const requestOptions = {
            method: 'POST',
            headers: myHeaders,
            body: JSON.stringify({ text: this.word }),
            redirect: 'follow'
        };

        fetch(endpoint, requestOptions)
            .then(response => response.json()) // JSON olarak parse et
            .then(result => {
                const translation = JSON.parse(result.translations[0].translation).text;
                callback(200, translation);
            })
            .catch(error => callback(500, error));
    }

    changeParameters(newWord, newLanguage) {
        this.word = newWord;
        this.language = newLanguage;
    }
}