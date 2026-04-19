class Storage {

    static createMovieToStorage(newMovie) {
        let movies = this.getMoviesFromStorage();

        movies.push(newMovie);

        localStorage.setItem("movies", JSON.stringify(movies));
    };

    static deleteMovieToStorage(movieTitle) {
        let movies = this.getMoviesFromStorage();

        movies.forEach(function (movie, index) {
            if (movie.title === movieTitle) {
                movies.splice(index, 1);
            }
        });

        localStorage.setItem("movies", JSON.stringify(movies));
    };

    static deleteMovieListToStorage() {
        localStorage.removeItem("movies");
    };

    static getMoviesFromStorage() {
        let movies;

        if (!localStorage.getItem("movies")) {
            movies = [];
        } else {
            movies = JSON.parse(localStorage.getItem("movies"));
        }

        return movies;
    };
}