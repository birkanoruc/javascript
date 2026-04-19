class Currency {
    constructor(mainCurrency, targetCurrency) {
        this.mainCurrency = mainCurrency;
        this.targetCurrency = targetCurrency;
        this.url = "https://api.collectapi.com/economy/";
        this.apiKey = "apikey 5IGOrjB13SjxDmRQ1z7SoO:0gksyx3A7yXaTkbuQjFXrP";
        this.amount = null;
    }

    exchange() {
        const endpoint = `${this.url}exchange?int=${this.amount}&to=${this.targetCurrency}&base=${this.mainCurrency}`;

        return fetch(endpoint, {
            method: "GET",
            headers: {
                "authorization": this.apiKey,
                "content-type": "application/json"
            }
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.json();
            });
    }

    changeAmount(amount) {
        this.amount = amount;
    }

    changeMainCurrency(mainCurrency) {
        this.mainCurrency = mainCurrency;
    }

    changeTargetCurrency(targetCurrency) {
        this.targetCurrency = targetCurrency;
    }
}