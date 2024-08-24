function UI() {

};

const movieList = document.getElementById("movie-list");
const createMovieSection = document.getElementById("create-movie-section");

UI.prototype.clearInputs = function (inputs) {
    inputs.forEach(input => {
        input.value = "";
    });
};

UI.prototype.showAlert = function (type, message) {
    const alertItemDiv = document.createElement("div");
    alertItemDiv.className = `alert alert-${type} mt-4`;
    alertItemDiv.appendChild(document.createTextNode(message));
    createMovieSection.appendChild(alertItemDiv);

    setTimeout(function () {
        alertItemDiv.remove();
    }, 1000);
};

UI.prototype.createMovieToUI = function (newMovie) {
    movieList.innerHTML += `
    <tr>
        <td><img src="${newMovie.url}" class="img-fluid img-thumbnail"></td>
        <td>${newMovie.title}</td>
        <td>${newMovie.director}</td>
        <td><a href="#" id="delete-movie" class="btn btn-danger">Filmi Sil</a></td>
    </tr> 
    `;
};

UI.prototype.deleteMovieToUI = function (element) {
    element.parentElement.parentElement.remove();
}

UI.prototype.loadMovieListToUI = function (movies) {
    movies.forEach(function (movie) {
        this.createMovieToUI(movie);
    }.bind(this));
};

UI.prototype.deleteMovieListToUI = function () {
    while (movieList.firstElementChild !== null) {
        movieList.removeChild(movieList.firstElementChild);
    }
}