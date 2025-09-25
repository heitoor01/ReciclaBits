<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="{{ asset('css/passRec.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous" />
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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="map.html">Mapa</a></li>
                        <li class="nav-item"><a class="nav-link" href="contato.html">Contato</a></li>
                        <li class="nav-item"><a class="nav-link" href="sobreNos.html">Sobre nós</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="d-flex justify-content-center align-items-center min-vh-90">
        <div class="card shadow form-card">
            <div class="card-body p-4">
                <h1 class="h5 mb-4 text-center">Recuperar Senha</h1>

                <form>
                    <!-- CPF e Data -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00">
                        </div>
                        <div class="col-md-6">
                            <label for="dataNasc" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="dataNasc">
                        </div>
                    </div>

                    <div class="text-center my-3 text-muted">OU</div>

                    <!-- E-mail -->
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail">
                    </div>

                    <button type="submit" class="btn btn-success w-100">Recuperar Senha</button>
                </form>
            </div>
        </div>
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

<script src="{{ asset('js/contato.j') }}s"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>


</html>