// Exemplo simples: Enter no campo de busca
const searchInput = document.getElementById('search-bar');
if (searchInput) {
  searchInput.addEventListener('keydown', (e) => {
    if (e.key === 'Enter') {
      // Troque por sua lógica de busca / navegação
      const termo = searchInput.value.trim().toLowerCase();

      // mapa de palavras-chave para páginas
      const rotas = {
        "home": "index.html",
        "início": "index.html",
        "inicio": "index.html",
        "mapa": "map.html",
        "contato": "contato.html",
        "faq": "faq.html",
        "sugestões": "suggestions.html",
        "sugestoes": "suggestions.html",
        "sugestão": "suggestions.html",
        "sugestao": "suggestions.html",
      };
      if (rotas[termo]) {
        window.location.href = rotas[termo];
      } else {
        window.location.href = "notFound";
      }
    }
  });
}