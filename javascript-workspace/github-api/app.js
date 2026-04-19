"use strict"

const githubForm = document.getElementById("github-form");
const githubName = document.getElementById("github-name")
const clearLastUsersBtn = document.getElementById("clear-last-users");
const lastUsers = document.getElementById("last-users");

const github = new Github();
const ui = new UI();

function eventListeners() {
    githubForm.addEventListener("submit", getUser);
    clearLastUsersBtn.addEventListener("click", clearLastUsers);
    document.addEventListener("DOMContentLoaded", getLastUsers);
};

eventListeners();

function getUser(e) {
    e.preventDefault();

    const username = githubName.value.trim();

    if (!username) {
        ui.showAlert("danger", "Kullanıcı adı alanı boş bırakılamaz!");
    } else {
        github.getUser(username)
            .then(response => {
                if (response.user.message === "Not Found") {
                    ui.showAlert("danger", "Kullanıcı bulunamadı");
                } else {
                    ui.showAlert("success", "Bilgiler getiriliyor...");
                    ui.showUserInfo(response.user);
                    ui.showReposInfo(response.repos);
                    ui.addSearchedUserToUI(username);
                    Storage.addSearchedUserFromStorage(username);
                }
            })
            .catch(err => ui.showAlert("danger", err));
    }

    ui.clearUnput();

}

function clearLastUsers(e) {
    e.preventDefault();
    if (confirm("Tüm arama geçmişini silmek istediğinize emin misiniz?")) {
        ui.clearSearchedUserToUI();
        Storage.clearSearchedUsersFromStorage();
        ui.showAlert("success", "Tüm arama geçmişi başarıyla silindi!");
    }

}

function getLastUsers() {
    ui.loadLastUsers();
}