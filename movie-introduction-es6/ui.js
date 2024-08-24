class UI {
    static clearInputs(inputs) {
        inputs.forEach(input => {
            input.value = "";
        });
    }

    static showAlert(type, message) {
        const alertItemDiv = document.createElement("div");
        alertItemDiv.className = `alert alert-${type} mt-4`;
        alertItemDiv.appendChild(document.createTextNode(message));

        const createMovieSection = document.getElementById("create-movie-section");
        createMovieSection.appendChild(alertItemDiv);

        setTimeout(function () {
            alertItemDiv.remove();
        }, 1000);
    }

    static createMovieToUI(newMovie) {
        const movieList = document.getElementById("movie-list");
        movieList.innerHTML += `
        <tr>
            <td><img src="${newMovie.url}" class="img-fluid img-thumbnail"></td>
            <td>${newMovie.title}</td>
            <td>${newMovie.director}</td>
            <td><a href="#" id="delete-movie" class="btn btn-danger">Filmi Sil</a></td>
        </tr> 
        `;
    }

    static deleteMovieToUI(element) {
        element.parentElement.parentElement.remove();
    }

    static loadMovieListToUI(movies) {
        movies.forEach((movie) => {
            UI.createMovieToUI(movie);
        });
    }

    static deleteMovieListToUI() {
        const movieList = document.getElementById("movie-list");
        while (movieList.firstElementChild !== null) {
            movieList.removeChild(movieList.firstElementChild);
        }
    }
}