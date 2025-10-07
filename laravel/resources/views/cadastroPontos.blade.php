<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CRUD • Pontos de Coleta</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    :root{
      --brand:#2e7d32;--brand-3:#f5faeb;
    }
    body{background:var(--brand-3)}
    .navbar{background:#fff}
    .card{border-radius:16px}
    .table thead th{white-space:nowrap}
    .form-section{position:sticky;top:16px}
    .badge-url{max-width:220px; text-overflow:ellipsis; overflow:hidden; white-space:nowrap; display:inline-block;}
  </style>
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center gap-2" href="index.html">
        <img src="src/img/ReciclaBits.png" alt="logo" style="width:42px;height:auto">
        <span>ReciclaBits</span>
      </a>
      <span class="ms-auto fw-semibold" style="color:var(--brand)">CRUD • Pontos de Coleta</span>
    </div>
  </nav>
</header>

<main class="container py-4">
  <div class="row g-4">
    <!-- Formulário -->
    <div class="col-12 col-lg-4">
      <div class="card shadow-sm form-section">
        <div class="card-body">
          <h5 class="mb-3" id="formTitle">Adicionar ponto</h5>
          <form id="formColeta">
            <input type="hidden" id="id" />
            <div class="mb-2">
              <label class="form-label">Nome</label>
              <input class="form-control" id="nome" required placeholder="Ex.: Recicla Digital"/>
            </div>
            <div class="mb-2">
              <label class="form-label">Endereço</label>
              <input class="form-control" id="endereco" required placeholder="Rua/Av, nº, bairro, cidade"/>
            </div>
            <div class="mb-2">
              <label class="form-label">Telefone</label>
              <input class="form-control" id="telefone" placeholder="(11) 99999-9999"/>
            </div>
            <div class="mb-2">
              <label class="form-label">Horário</label>
              <input class="form-control" id="horario" placeholder="Seg–Sex, 9h–17h"/>
            </div>
            <div class="mb-3">
              <label class="form-label">Site</label>
              <input class="form-control" id="site" placeholder="https://exemplo.com.br"/>
            </div>

            <div class="d-grid gap-2">
              <button class="btn btn-success" type="submit">Salvar</button>
              <button class="btn btn-outline-secondary" type="button" id="btnLimpar">Limpar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Lista / Busca -->
    <div class="col-12 col-lg-8">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="d-flex flex-column flex-md-row gap-2 align-items-md-center justify-content-between mb-3">
            <h5 class="mb-0">Lista de pontos</h5>
            <div class="input-group" style="max-width:340px">
              <span class="input-group-text">Buscar</span>
              <input id="busca" class="form-control" placeholder="nome, endereço, telefone..." />
            </div>
          </div>

          <div class="table-responsive">
            <table class="table align-middle">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Endereço</th>
                  <th>Telefone</th>
                  <th>Horário</th>
                  <th>Site</th>
                  <th class="text-end">Ações</th>
                </tr>
              </thead>
              <tbody id="tbody"></tbody>
            </table>
          </div>

          <div id="vazio" class="text-center text-muted py-4 d-none">
            Nenhum ponto cadastrado.
          </div>

          <div class="d-flex gap-2">
            <button class="btn btn-outline-danger btn-sm" id="btnZerar">Apagar tudo</button>
            <button class="btn btn-outline-primary btn-sm" id="btnSeed">Carregar exemplos</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<script>
/* ===== util localStorage ===== */
const KEY = "reciclabits_coletas";
const getAll = () => JSON.parse(localStorage.getItem(KEY) || "[]");
const saveAll = (arr) => localStorage.setItem(KEY, JSON.stringify(arr));

/* ===== DOM refs ===== */
const form = document.getElementById("formColeta");
const formTitle = document.getElementById("formTitle");
const btnLimpar = document.getElementById("btnLimpar");
const btnZerar = document.getElementById("btnZerar");
const btnSeed = document.getElementById("btnSeed");
const tbody = document.getElementById("tbody");
const busca = document.getElementById("busca");

const $ = (id) => document.getElementById(id);

/* ===== CRUD ===== */
function listar(filtro=""){
  const dados = getAll();
  const lower = filtro.trim().toLowerCase();
  const filtrados = lower
    ? dados.filter(d => Object.values(d).join(" ").toLowerCase().includes(lower))
    : dados;

  tbody.innerHTML = "";
  if (filtrados.length === 0) {
    document.getElementById("vazio").classList.remove("d-none");
    return;
  }
  document.getElementById("vazio").classList.add("d-none");

  filtrados.forEach(d => {
    const tr = document.createElement("tr");
    tr.innerHTML = `
      <td>${escapeHTML(d.nome)}</td>
      <td>${escapeHTML(d.endereco)}</td>
      <td>${escapeHTML(d.telefone || "-")}</td>
      <td>${escapeHTML(d.horario || "-")}</td>
      <td>${d.site ? `<a class="badge text-bg-light badge-url" href="${escapeAttr(d.site)}" target="_blank">${escapeHTML(d.site)}</a>` : "-"}</td>
      <td class="text-end">
        <button class="btn btn-sm btn-outline-primary me-1" onclick='editar(${d.id})'>Editar</button>
        <button class="btn btn-sm btn-outline-danger" onclick='excluir(${d.id})'>Excluir</button>
      </td>
    `;
    tbody.appendChild(tr);
  });
}

function salvar(e){
  e.preventDefault();
  const id = +($("id").value || 0);
  const item = {
    id: id || Date.now(),
    nome: $("nome").value.trim(),
    endereco: $("endereco").value.trim(),
    telefone: $("telefone").value.trim(),
    horario: $("horario").value.trim(),
    site: $("site").value.trim()
  };

  if(!item.nome || !item.endereco){
    alert("Nome e Endereço são obrigatórios.");
    return;
  }

  const dados = getAll();
  const idx = dados.findIndex(x => x.id === id);
  if (idx >= 0) {
    dados[idx] = item;
  } else {
    dados.push(item);
  }
  saveAll(dados);
  limparForm();
  listar(busca.value);
}

function editar(id){
  const d = getAll().find(x => x.id === id);
  if(!d) return;
  $("id").value = d.id;
  $("nome").value = d.nome;
  $("endereco").value = d.endereco;
  $("telefone").value = d.telefone || "";
  $("horario").value = d.horario || "";
  $("site").value = d.site || "";
  formTitle.textContent = "Editar ponto";
  window.scrollTo({top:0, behavior:"smooth"});
}

function excluir(id){
  if(!confirm("Excluir este ponto?")) return;
  saveAll(getAll().filter(x => x.id !== id));
  listar(busca.value);
}

function limparForm(){
  form.reset();
  $("id").value = "";
  formTitle.textContent = "Adicionar ponto";
}

function zerarTudo(){
  if(!confirm("Apagar todos os registros?")) return;
  localStorage.removeItem(KEY);
  listar(busca.value);
}

function seed(){
  const base = getAll();
  if (base.length) { alert("Já existem registros. Apague antes se quiser recarregar exemplos."); return; }
  const exemplos = [
    {id: Date.now()+1, nome:"Rentalfrag", endereco:"Rua Tamoios, 444", telefone:"(11) 5034-4048", horario:"Seg–Sex, 9h–17h", site:"https://www.rentalfrag.com.br"},
    {id: Date.now()+2, nome:"Recicla Digital", endereco:"Rua Orlando Calisto, 687", telefone:"(11) 3473-2737", horario:"Seg–Sex, 9h–16h30", site:"https://recicladigital.com.br"},
    {id: Date.now()+3, nome:"Terra Reciclagem", endereco:"Av. Industrial, 493", telefone:"(11) 95770-1964", horario:"Seg–Sab, 9h–17h", site:""}
  ];
  saveAll(exemplos);
  listar();
}

/* ===== helpers ===== */
function escapeHTML(s){ return String(s).replace(/[&<>"']/g,m=>({ "&":"&amp;","<":"&lt;",">":"&gt;","\"":"&quot;","'":"&#39;" }[m])); }
function escapeAttr(s){ return escapeHTML(s).replace(/"/g,"&quot;"); }

/* ===== events ===== */
form.addEventListener("submit", salvar);
btnLimpar.addEventListener("click", limparForm);
btnZerar.addEventListener("click", zerarTudo);
btnSeed.addEventListener("click", seed);
busca.addEventListener("input", e => listar(e.target.value));

/* init */
listar();
</script>
</body>
</html>
