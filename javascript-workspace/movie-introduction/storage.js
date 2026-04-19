function Storage() {

};

Storage.prototype.createMovieToStorage = function (newMovie) {
    let movies = this.getMoviesFromStorage();

    movies.push(newMovie);

    localStorage.setItem("movies", JSON.stringify(movies));
};

Storage.prototype.deleteMovieToStorage = function (movieTitle) {
    let movies = this.getMoviesFromStorage();

    movies.forEach(function (movie, index) {
        if (movie.title === movieTitle) {
            movies.splice(index, 1);
        }
    });

    localStorage.setItem("movies", JSON.stringify(movies));
};

Storage.prototype.deleteMovieListToStorage = function () {
    localStorage.removeItem("movies");
};

Storage.prototype.getMoviesFromStorage = function () {
    let movies;

    if (!localStorage.getItem("movies")) {
        movies = [];
    } else {
        movies = JSON.parse(localStorage.getItem("movies"));
    }

    return movies;
};