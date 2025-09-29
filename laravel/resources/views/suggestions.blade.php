<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
                    <img src="{{ asset('img/ReciclaBits.png') }}" alt="logo" class="logo"/>
                    <span>ReciclaBits</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('map') }}">Mapa</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contato') }}">Contato</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('sobre-nos') }}">Sobre nós</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="formulario">
            <form>
                <div class="mb-3">
                    <label for="exampleInputName1" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Endereço de email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="#" class="form-label">Nos dê dua sugestão!</label>
                    <textarea name="Text" id="exampleTextArea" type="text" class="form-control"  rows="8" cols="50" aria-describedby="SuggestionHelp" autocomplete="off"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </main>
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
</body>
<!-- Bootstrap JS -->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</html>