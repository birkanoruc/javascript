class Github {
    constructor() {
        this.url = "https://api.github.com/";
    }

    async getUser(username) {
        const userEndpoint = this.url + "users/" + username;
        const repoEndpoint = this.url + "users/" + username + "/repos";

        const responseUser = await fetch(userEndpoint);
        const responseRepo = await fetch(repoEndpoint);

        const user = await responseUser.json();
        const repos = await responseRepo.json();

        return {
            user: user,
            repos: repos
        }
    }
}