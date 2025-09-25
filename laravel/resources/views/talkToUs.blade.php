<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato</title>
  <link rel="stylesheet" href="{{ asset('css/contato.css') }}">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="index.html">
          <img src="src/img/ReciclaBits.png" alt="logo" class="logo" />
          <span>ReciclaBits</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="map.html">Mapa</a></li>
            <li class="nav-item"><a class="nav-link active" href="contato.html">Contato</a></li>
            <li class="nav-item"><a class="nav-link" href="sobreNos.html">Sobre nós</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="py-5 tktu">
    <div class="container">
      <header class="mb-4 text-center">
        <h1 class="display-6 fw-bold">Fale Conosco</h1>
        <p class="text-muted">Estamos sempre prontos para ouvir você</p>
      </header>

      <div class="row g-4">
        <!-- Informações de contato -->
        <div class="col-12 col-md-6">
          <div class="card shadow-sm h-100">
            <div class="card-body">
              <h2 class="h5 mb-3">Informações</h2>
              <p><strong>Endereço:</strong> Rua Exemplo, 123 – Santo André, SP</p>
              <p><strong>Telefone:</strong> (11) 99999-9999</p>
              <p><strong>Email:</strong> <a href="mailto:reciclabits@gmail.com">reciclabits@gmail.com</a></p>
              <p><strong>Horário de atendimento:</strong> Seg – Sex, 9h às 17h</p>
            </div>
          </div>
        </div>

        <!-- Formulário de contato -->
        <div class="col-12 col-md-6">
          <div class="card shadow-sm h-100">
            <div class="card-body">
              <h2 class="h5 mb-3">Envie uma mensagem</h2>
              <form>
                <div class="mb-3">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" id="nome" class="form-control" placeholder="Digite seu nome">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Digite seu email">
                </div>
                <div class="mb-3">
                  <label for="mensagem" class="form-label">Mensagem</label>
                  <textarea id="mensagem" rows="4" class="form-control"
                    placeholder="Escreva sua mensagem"></textarea>
                </div>
                <button type="submit" class="btn btn-success w-100">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="mt-5">
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

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</html>
