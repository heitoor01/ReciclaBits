<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Não encontramos o que você busca</title>
    <link rel="stylesheet" href="{{ asset('css/notFound.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous" />
</head>
<body>
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
        <h1>Não encontramos o que você queria</h1>

        <h2>Talvez você esteja procurando por isso:</h2>
        <section id="info" class="info">
            <div class="container">
                <div class="row g-4 cards">
                    <!-- Card 1 -->
                    <a class="col-12 col-md-6 col-lg-4 link" href="{{ route('suggestions') }}">
                        <article class="card faq-card h-100">
                            <div class="card-body">
                                <h2>Sugestões</h2>
                            </div>
                        </article>
                    </a>
                    <!-- Card 2 -->
                    <a class="col-12 col-md-6 col-lg-4 link" href="{{ route('faq') }}">
                        <article class="card faq-card h-100">
                            <div class="card-body">
                                <h2>Dúvidas?</h2>
                            </div>
                        </article>
                    </a>
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
<script src="{{ asset('js/contato.js') }}"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</html>