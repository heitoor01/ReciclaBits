const rotas = [
  { name: "home", url: "index.html" },
  { name: "mapa", url: "map.html" },
  { name: "contato", url: "contato.html" },
  { name: "sugestão", url: "suggestions.html" }
];

const fuse = new Fuse(rotas, {
  keys: ["name"],
  threshold: 0.3 // tolerância ao erro (quanto menor, mais rígido)
});

const searchInput = document.getElementById("search-bar");
searchInput.addEventListener("keydown", (e) => {
  if (e.key === "Enter") {
    const termo = searchInput.value.trim();

    // caso nada tenha sido digitado
    if (termo === "") {
      // alert("Você precisa digitar algo antes de pesquisar.");
      return;
    }

    const result = fuse.search(termo);
    if (result.length > 0) {
      window.location.href = result[0].item.url;
    } else {
      window.location.href = "notFound.html";
    }
  }
});

const btnLogin = document.getElementById("btn-login");
const loginBox = document.getElementById("login-box");

btnLogin.addEventListener("click", () => {
  loginBox.classList.toggle("show");
});

// Fecha se clicar fora
document.addEventListener("click", (e) => {
  if (!loginBox.contains(e.target) && !btnLogin.contains(e.target)) {
    loginBox.classList.remove("show");
  }
});


