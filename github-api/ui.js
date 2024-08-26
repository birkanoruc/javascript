class UI {
    constructor() {
        this.profile = document.getElementById("profile");
        this.repos = document.getElementById("repos");
        this.lastUsers = document.getElementById("last-users");
        this.githubname = document.getElementById("github-name");
        this.search = document.getElementById("search");
    }

    clearUnput() {
        this.githubname.value = "";
    }

    showAlert(type, message) {
        const alertItemDiv = document.createElement("div");
        alertItemDiv.className = `alert alert-${type} mt-4`;
        alertItemDiv.appendChild(document.createTextNode(message));
        this.search.appendChild(alertItemDiv);

        setTimeout(function () {
            alertItemDiv.remove();
        }, 3000);
    }

    showUserInfo(user) {
        this.profile.innerHTML = `
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title h5">Profil Bilgileri</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="${user.html_url}">
                                <img class="img-thumbnail"
                                    src="${user.avatar_url}">
                            </a>
                            <ul class="list-group mt-4 mb-4">
                                <li class="list-group-item borderzero">
                                    <img src="images/company.png" width="20x"> <span id="company">${user.company}</span>
                                </li>
                                <li class="list-group-item borderzero">
                                    <img src="images/location.png" width="20px"> <span id="location">${user.location}</a>
                                </li>
                                <li class="list-group-item borderzero">
                                    <img src="images/mail.png" width="20px"> <span id="email">${user.email}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <button class="btn btn-secondary">Takipçi <span class="badge badge-light">${user.followers}</span></button>
                            <button class="btn btn-info">Takip Edilen <span class="badge badge-light">${user.following}</span></button>
                            <button class="btn btn-danger">Repolar <span class="badge badge-light">${user.public_repos}</span></button>
                            <hr>
                            <div id="fullName"><strong>${user.name}</strong></div>
                            <hr>
                            <div id="bio">${user.bio}</div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    showReposInfo(repos) {
        let htmlContent = `
        <div class="card">
            <div class="card-header">
                <h2 class="card-title h5">En Son Repolar</h2>
            </div>
            <div class="card-body">
            <div class="row mt-2">
        `;

        repos.forEach(repo => {
            htmlContent += `
                <div class="alert alert-warning col-md-12">
                    <a href="${repo.html_url}" target="_blank" id="repoName">${repo.name}</a>
                    <div class="text-end">
                        <button class="btn btn-sm btn-secondary">
                            Starlar <span class="badge badge-light" id="repoStar">${repo.stargazers_count}</span>
                        </button>
                        <button class="btn btn-sm btn-info">
                            Forklar <span class="badge badge-light" id="repoFork">${repo.forks_count}</span>
                        </button>
                    </div>
                </div>
            `;
        });

        // card-body ve card kapanışı
        htmlContent += `
            </div>
            </div>
        </div>`;

        // İçeriği repos elementine yerleştir
        this.repos.innerHTML = htmlContent;
    }

    addSearchedUserToUI(username) {
        let users = Storage.getSearchedUsersFromStorage();

        if (users.indexOf(username) === -1) {
            const li = document.createElement("li");
            li.className = "list-group-item";
            li.textContent = username;
            this.lastUsers.appendChild(li);
        }
    }

    loadLastUsers() {
        let users = Storage.getSearchedUsersFromStorage();

        users.forEach((user) => {
            UI.createUser(user);
        });
    }

    static createUser(username) {
        const li = document.createElement("li");
        li.className = "list-group-item";
        li.textContent = username;
        const lastUsers = document.getElementById("last-users");
        lastUsers.appendChild(li);
    }

    clearSearchedUserToUI() {
        while (this.lastUsers.firstElementChild !== null) {
            this.lastUsers.removeChild(this.lastUsers.firstElementChild);
        }
    }

}