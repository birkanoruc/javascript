'use strict';

const movieTitleInput = document.getElementById("movie-title");
const movieDirectorInput = document.getElementById("movie-director");
const movieUrlInput = document.getElementById("movie-url");

const ui = new UI();
const storage = new Storage();

function eventListeners() {
    document.getElementById("create-movie-form").addEventListener("submit", createMovie);

    document.addEventListener("DOMContentLoaded", function () {
        let movies = storage.getMoviesFromStorage();
        ui.loadMovieListToUI(movies);
    });

    document.getElementById("movie-list").addEventListener("click", deleteMovie);

    document.getElementById("delete-movie-list").addEventListener("click", deleteMovieList);
};

eventListeners();

function deleteMovieList(e) {
    if (confirm("Tüm filmleri silmek istediğinize emin misiniz?")) {
        ui.deleteMovieListToUI();
        storage.deleteMovieListToStorage();
        ui.showAlert("success", "Tüm filmler başarıyla silindi!");
    }
    e.preventDefault();
};

function deleteMovie(e) {
    if (e.target.id === "delete-movie") {
        ui.deleteMovieToUI(e.target);
        storage.deleteMovieToStorage(e.target.parentElement.previousElementSibling.previousElementSibling.textContent);
        ui.showAlert("success", "Film başarılı bir şekilde silindi!");
    }
    e.preventDefault();
};

function createMovie(e) {
    const title = movieTitleInput.value.trim();
    const director = movieDirectorInput.value.trim();
    const url = movieUrlInput.value.trim();

    if (!title || !director || !url) {
        ui.showAlert("danger", "Lütfen tüm alanları doldurunuz!");
    } else {
        const newMovie = new Movie(title, director, url);
        ui.createMovieToUI(newMovie);
        storage.createMovieToStorage(newMovie);
        ui.clearInputs(Array(movieTitleInput, movieDirectorInput, movieUrlInput));
        ui.showAlert("success", "Film başarılı bir şekilde eklendi!");
    }

    e.preventDefault();
};