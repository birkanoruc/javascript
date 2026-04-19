class Storage {

    static getSearchedUsersFromStorage() {
        let users;

        if (!localStorage.getItem("searched")) {
            users = [];
        } else {
            users = JSON.parse(localStorage.getItem("searched"));
        }

        return users;
    }

    static clearSearchedUsersFromStorage() {
        localStorage.removeItem("searched");
    };

    static addSearchedUserFromStorage(username) {
        let users = this.getSearchedUsersFromStorage();

        if (users.indexOf(username) === -1) {
            users.push(username);
        }

        localStorage.setItem("searched", JSON.stringify(users));
    }

}