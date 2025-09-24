<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre Nós</title>
  <link rel="stylesheet" href="src/css/sobre.css">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="index.html">
          <img src="src/img/ReciclaBits.png" alt="logo" class="logo" onclick="goHome()" />
          <span>ReciclaBits</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" aria-current="page" href="index.html">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="map.html">Mapa</a></li>
            <li class="nav-item"><a class="nav-link" href="contato.html">Contato</a></li>
            <li class="nav-item"><a class="nav-link active" href="sobreNos.html">Sobre nós</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section id="history" class="py-5">
      <div class="container">
        <header class="mb-4 text-center">
          <h1 class="display-6 fw-bold">Nossa História</h1>
          <p class="text-muted mb-0">Sustentabilidade e inovação caminhando lado a lado desde 2025</p>
        </header>

        <article class="row g-4 align-items-start">
          <!-- Texto principal -->
          <div class="col-12 col-lg-8">
            <p>
              A <strong>ReciclaBits</strong> nasceu em <strong>2025</strong>, em Santo André (SP), da inquietação de
              jovens empreendedores
              diante do avanço do lixo eletrônico. Celulares, computadores e baterias, quando descartados de forma
              incorreta,
              contaminam o solo e a água e colocam a saúde em risco.
            </p>
            <p>
              Transformamos essa preocupação em ação: unimos tecnologia, logística e educação para conectar
              <strong>empresas</strong> e <strong>comunidade</strong> em busca de uma cidade mais sustentável. Desde o
              início, criamos pontos de
              coleta acessíveis, construímos parcerias e lançamos um programa de recompensas para valorizar quem
              descarta
              corretamente.
            </p>

            <h2 class="h5 mt-4">Nossos Pilares</h2>
            <ul class="list-group mb-4">
              <li class="list-group-item"><strong>Acessibilidade:</strong> pontos de coleta fáceis de encontrar e usar.
              </li>
              <li class="list-group-item"><strong>Parcerias:</strong> instituições, escolas, empresas e poder público
                somando forças.</li>
              <li class="list-group-item"><strong>Valorização do cidadão:</strong> recompensas a cada entrega
                consciente.</li>
            </ul>

            <p>
              O primeiro ponto de coleta abriu em abril de 2025 e, em poucos meses, já encaminhava centenas de quilos de
              e-lixo
              para reciclagem especializada. Hoje seguimos crescendo com mapa interativo, app próprio e novas cidades
              atendidas.
            </p>
            <p class="mb-0">
              Nosso propósito continua firme: <em>transformar a relação da sociedade com os resíduos tecnológicos</em>,
              provando que
              sustentabilidade e inovação podem — e devem — andar juntas.
            </p>
          </div>

          <!-- Lateral: marcos/CTA -->
          <aside class="col-12 col-lg-4">
            <div class="card shadow-sm h-100">
              <div class="card-body">
                <h2 class="h5">Linha do Tempo</h2>
                <ul class="timeline list-unstyled small">
                  <li class="mb-2">
                    <strong>2025 — Fundação</strong><br>
                    Ideia nasce na universidade; ReciclaBits ganha forma.
                  </li>
                  <li class="mb-2">
                    <strong>Abr/2025 — 1º Ponto</strong><br>
                    Inauguração do primeiro ponto de coleta em Santo André.
                  </li>
                  <li class="mb-2">
                    <strong>2025 — Programa de Recompensas</strong><br>
                    Lançamento dos pontos que viram benefícios ao usuário.
                  </li>
                  <li>
                    <strong>Hoje</strong><br>
                    Expansão regional, app e novas parcerias.
                  </li>
                </ul>

                <hr>
                <p class="mb-2"><strong>Quer fazer parte?</strong></p>
                <a href="contato.html" class="btn btn-success w-100">Seja parceiro(a)</a>
              </div>
            </div>
          </aside>
        </article>
      </div>
    </section>

  </main>
  <footer id="contato">
    <div class="container">
      <div class="row gy-4 align-items-center">
        <div class="col-12 col-md-4">
          <div class="d-flex flex-column gap-1">
            <strong>Sobre nós</strong>
            <a href="sobreNos.html">Quem somos</a>
          </div>
        </div>
        <div class="col-12 col-md-4 text-md-center copy">
          <p>Copyright © 2025. Todos os direitos reservados</p>
        </div>
        <div class="col-12 col-md-4 text-md-end">
          <div class="d-flex flex-column gap-1">
            <strong>Contate-nos</strong>
            <a href="mailto:reciclabits@gmail.com">reciclabits@gmail.com</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</html>