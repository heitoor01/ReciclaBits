<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ReciclaBits</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous" />

  <script src="https://cdn.jsdelivr.net/npm/fuse.js/dist/fuse.min.js"></script>
  <!-- Google Icons (lupa) -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />

</head>

<body>
  <!-- HEADER / NAV -->
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
          <img src="{{ asset('img/ReciclaBits.png') }}" alt="logo" class="logo" />
          <span>ReciclaBits</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('map') }}">Mapa</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('contato') }}">Contato</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('sobre-nos') }}">Sobre nós</a></li>
            <!-- Botão de Login -->
            <li class="nav-item">
              <button id="btn-login" class="btn btn-success ms-3">Login</button>
            </li>
          </ul>
          <!-- Caixa de login -->
          <div id="login-box" class="login-box shadow">
            <form>
              <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" id="email" class="form-control" placeholder="Digite seu e-mail" required>
              </div>
              <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" id="senha" class="form-control" placeholder="Digite sua senha" required>
              </div>
              <a href="{{ route('password.recovery') }}" class="small d-block mb-2">Esqueceu sua senha?</a>
              <button type="submit" class="btn btn-success w-100">Entrar</button>
              <p class="mt-3 text-center small">Não tem cadastro?</p>
              <a class="btn btn-primary w-100" href="{{ route('cadastro') }}">Cadastre-se</a>
            </form>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <!-- BANNER / HERO -->
    <section class="banner">
      <div class="hero">
        <img src="{{ asset('img/Hero.png') }}" alt="Lixeira e reciclagem" />
        <div class="apresentacao">
          <p class="titulo">EMPRESA CRIADA COM A IDEIA DE CONECTAR EMPRESA E COMUNIDADE EM BUSCA DE UMA CIDADE MAIS
            SUSTENTÁVEL</p>
        </div>
        <div class="search-field">
          <span class="material-symbols-outlined search-icon">search</span>
          <input id="search-bar" class="search-bar" type="text" placeholder="O que você procura?" autocomplete="off" />
        </div>
      </div>
    </section>

    <!-- INFO / CARDS -->
    <section id="info" class="info">
      <div class="container">
        <div class="row g-4">
          <!-- Card 1 -->
          <div class="col-12 col-md-6 col-lg-4">
            <article class="card recicla-card h-100">
              <img class="recicla-img" src="{{ asset('img/Recicle.png') }}" alt="Equipe ReciclaBits" />
              <div class="card-body">
                <h2>Por que reciclar?</h2>
                <p>
                  Reciclar lixo eletrônico é essencial para reduzir os impactos ambientais causados pelo descarte
                  incorreto de aparelhos como celulares, computadores e baterias. Esses materiais contêm metais pesados
                  e substâncias tóxicas que podem contaminar o solo e a água, prejudicando a saúde humana e a natureza.
                  Além disso, a reciclagem permite recuperar recursos valiosos, como ouro, cobre e alumínio, diminuindo
                  a necessidade de extração de novas matérias-primas. Ao dar o destino correto ao e-lixo, contribuímos
                  para a preservação do meio ambiente e promovemos um consumo mais sustentável.
                </p>
              </div>
            </article>
          </div>
          <!-- Card 2 -->
          <div class="col-12 col-md-6 col-lg-4">
            <article class="card recicla-card h-100">
              <img class="recicla-img" src="{{ asset('img/Recompensa.png') }}" alt="Ganhe recompensas" />
              <div class="card-body">
                <h2>Você pode ganhar reciclando</h2>
                <p>
                  Nosso programa de recompensa valoriza quem faz o descarte correto do lixo eletrônico em nossas
                  coletoras parceiras. Cada entrega consciente gera pontos que podem ser trocados por descontos e
                  benefícios exclusivos. Dessa forma, incentivamos a comunidade a dar o destino certo aos resíduos,
                  reduzindo impactos ambientais e fortalecendo a cultura da sustentabilidade.
                </p>
              </div>
            </article>
          </div>
          <!-- Card 3 -->
          <div class="col-12 col-md-6 col-lg-4">
            <article class="card recicla-card h-100">
              <img class="recicla-img" src="{{ asset ('img/Educacao.png') }}" alt="Educação ambiental" />
              <div class="card-body">
                <h2>Educação Ambiental</h2>
                <p>
                  A educação ambiental é fundamental para formar cidadãos conscientes e responsáveis com o planeta. Ela
                  promove o entendimento de como nossas ações impactam a natureza e incentiva práticas sustentáveis no
                  dia a dia, como o uso racional da água, a separação do lixo e a preservação da biodiversidade. Mais do
                  que transmitir conhecimento, a educação ambiental desperta valores de respeito, cuidado e
                  solidariedade, ajudando a construir uma sociedade mais equilibrada e comprometida com o futuro das
                  próximas gerações.
                </p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <footer id="contato">
    <div class="container">
      <div class="row gy-4 align-items-center">
        <div class="col-12 col-md-4">
          <div class="d-flex flex-column gap-1">
            <strong>Sobre nós</strong>
            <a href="{{ route('sobre-nos') }}">Quem somos</a>
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

  <!-- Bootstrap JS -->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

  <script src="{{ asset('js/script.js') }}"></script>

  <script src="{{ asset('js/contato.js') }}"></script>

</body>


</html>