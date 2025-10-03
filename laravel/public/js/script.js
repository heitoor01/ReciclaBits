const rotas = [
    { name: "home", url: "/" },
    { name: "mapa", url: "laravel/public/mapa" },
    { name: "contato", url: "/contato" },
    { name: "sugestão", url: "/sugestoes" }
];

const fuse = new Fuse(rotas, {
    keys: ["name"],
    threshold: 0.3 // tolerância ao erro (quanto menor, mais rígido)
});

const searchInput = document.getElementById("search-bar");
if (searchInput) {
    searchInput.addEventListener("keydown", (e) => {
        if (e.key === "Enter") {
            const termo = searchInput.value.trim();

            // caso nada tenha sido digitado
            if (termo === "") {
                // alert("Você precisa digitar algo antes de pesquisar.");
                return;
            }

            const result = fuse.search(termo);

            searchInput.value = "";

            if (result.length > 0) {

                window.location.href = result[0].item.url;
            } else {
                window.location.href = "404";
            }
        }
    });
}

// const btnLogin = document.getElementById("btn-login");
// const loginBox = document.getElementById("login-box");

// if (btnLogin && loginBox) {
//     btnLogin.addEventListener("click", () => {
//         loginBox.classList.toggle("show");
//     });

//     // Fecha se clicar fora
//     document.addEventListener("click", (e) => {
//         if (!loginBox.contains(e.target) && !btnLogin.contains(e.target)) {
//             loginBox.classList.remove("show");
//         }
//     });
// }


