<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GitHub Repo Explorer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card { min-height: 180px; }
    #suggestions {
      position: absolute;
      top: 100%;
      left: 0;
      right: 0;
      z-index: 1000;
    }
  </style>
</head>
<body class="bg-light">
  <div class="container py-4">
    <h1 class="text-center mb-4">GitHub Repo Explorer</h1>
    <div class="row mb-4">
      <div class="col-md-8 mx-auto position-relative">
        <div class="d-flex">
          <input type="text" id="usernameInput" class="form-control me-2" placeholder="Enter GitHub username...">
          <button class="btn btn-primary" onclick="loadRepos()">Search</button>
        </div>
        <div id="suggestions"></div>
      </div>
    </div>

    <div id="alertBox"></div>

    <div class="row" id="repoContainer"></div>
  </div>

  <script>
    const container = document.getElementById("repoContainer");
    const alertBox = document.getElementById("alertBox");
    const usernameInput = document.getElementById("usernameInput");
    const suggestionsBox = document.getElementById("suggestions");
    async function loadRepos(username = null) {
      const user = username || usernameInput.value.trim();
      if (!user) {
        showAlert("Please enter a username", "warning");
        return;
      }

      suggestionsBox.innerHTML = ""; 
      container.innerHTML = "<p class='text-center text-muted'>Loading...</p>"; 

      try {
        const response = await fetch(`https://api.github.com/users/${user}/repos`);
        if (!response.ok) throw new Error("User not found");
        const repos = await response.json();
        displayRepos(repos);
      } catch (err) {
        container.innerHTML = "";
        showAlert("Error: " + err.message, "danger");
      }
    }

    
    function displayRepos(repos) {
      container.innerHTML = "";
      if (repos.length === 0) {
        container.innerHTML = "<p class='text-center text-muted'>No repositories found.</p>";
        return;
      }
      repos.forEach(repo => {
        container.innerHTML += `
          <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h5 class="card-title">${repo.name}</h5>
                <p>${repo.description ? repo.description : "No description"}</p>
                <p><strong>⭐ Stars:</strong> ${repo.stargazers_count}</p>
                <a href="${repo.html_url}" target="_blank" class="btn btn-sm btn-dark">View Repo</a>
              </div>
            </div>
          </div>`;
      });
    }

    
    function showAlert(message, type) {
      alertBox.innerHTML = `<div class="alert alert-${type}" role="alert">${message}</div>`;
    }

    
    usernameInput.addEventListener("input", async () => {
      const query = usernameInput.value.trim();
      suggestionsBox.innerHTML = "";
      if (query.length < 2) return; 

      try {
        const response = await fetch(`https://api.github.com/search/users?q=${query}+in:login&per_page=5`);
        if (!response.ok) return;
        const result = await response.json();

        if (result.items.length > 0) {
          const list = document.createElement("div");
          list.classList.add("list-group");

          result.items.forEach(user => {
            const item = document.createElement("button");
            item.type = "button";
            item.classList.add("list-group-item", "list-group-item-action", "d-flex", "align-items-center");

            item.innerHTML = `
              <img src="${user.avatar_url}" alt="avatar" width="30" height="30" class="rounded-circle me-2">
              <span>${user.login}</span>
            `;

            item.onclick = () => {
              usernameInput.value = user.login;
              suggestionsBox.innerHTML = "";
              loadRepos(user.login);
            };

            list.appendChild(item);
          });

          suggestionsBox.appendChild(list);
        }
      } 
      catch (err) {
        console.log("Suggestion error", err);
      }
    });

    document.addEventListener("click", (e) => {
      if (!e.target.closest("#usernameInput")) {
        suggestionsBox.innerHTML = "";
      }
    });

    usernameInput.addEventListener("keypress", (e) => {
      if (e.key === "Enter") {
        e.preventDefault();
        loadRepos();
      }
    });
  </script>
</body>
</html>
