'use strict';

const movieTitleInput = document.getElementById("movie-title");
const movieDirectorInput = document.getElementById("movie-director");
const movieUrlInput = document.getElementById("movie-url");

function eventListeners() {
    document.getElementById("create-movie-form").addEventListener("submit", createMovie);

    document.addEventListener("DOMContentLoaded", function () {
        let movies = Storage.getMoviesFromStorage();
        UI.loadMovieListToUI(movies);
    });

    document.getElementById("movie-list").addEventListener("click", deleteMovie);

    document.getElementById("delete-movie-list").addEventListener("click", deleteMovieList);
};

eventListeners();

function deleteMovieList(e) {
    e.preventDefault();

    if (confirm("Tüm filmleri silmek istediğinize emin misiniz?")) {
        UI.deleteMovieListToUI();
        Storage.deleteMovieListToStorage();
        UI.showAlert("success", "Tüm filmler başarıyla silindi!");
    }
};

function deleteMovie(e) {
    e.preventDefault();

    if (e.target.id === "delete-movie") {
        UI.deleteMovieToUI(e.target);
        Storage.deleteMovieToStorage(e.target.parentElement.previousElementSibling.previousElementSibling.textContent);
        UI.showAlert("success", "Film başarılı bir şekilde silindi!");
    }
};

function createMovie(e) {
    e.preventDefault();

    const title = movieTitleInput.value.trim();
    const director = movieDirectorInput.value.trim();
    const url = movieUrlInput.value.trim();

    if (!title || !director || !url) {
        UI.showAlert("danger", "Lütfen tüm alanları doldurunuz!");
    } else {
        const newMovie = new Movie(title, director, url);
        UI.createMovieToUI(newMovie);
        Storage.createMovieToStorage(newMovie);
        UI.clearInputs(Array(movieTitleInput, movieDirectorInput, movieUrlInput));
        UI.showAlert("success", "Film başarılı bir şekilde eklendi!");
    }

};