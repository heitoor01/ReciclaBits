<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa</title>
    <link rel="stylesheet" href="src/css/map.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous" />

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center gap-2" href="index.html">
                    <img src="src/img/ReciclaBits.png" alt="logo" class="logo" onclick="goHome()"/>
                    <span>ReciclaBits</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="map.html">Mapa</a></li>
                        <li class="nav-item"><a class="nav-link" href="contato.html">Contato</a></li>
                        <li class="nav-item"><a class="nav-link" href="sobreNos.html">Sobre nós</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        
        <div class="map">
            <div class="locals">

                <div class="card">
                  <h2>Rentalfrag</h2>
                  <p><strong>Endereço:</strong> Rua Tamoios, 444</p>
                  <p><strong>Telefone:</strong> (11) 5034-4048</p>
                  <p><strong>Serviço:</strong> Trituração e reciclagem</p>
                  <a href="https://www.rentalfrag.com.br" target="_blank" class="btn">Visitar Site</a>
                </div>
            
                <div class="card">
                  <h2>Recicla Digital</h2>
                  <p><strong>Endereço:</strong> Rua Orlando Calisto, 687</p>
                  <p><strong>Telefone:</strong> (11) 3473-2737</p>
                  <p><strong>Horário:</strong> Aberto até 16h30</p>
                  <a href="https://recicladigital.com.br" target="_blank" class="btn">Visitar Site</a>
                </div>
            
                <div class="card">
                  <h2>Terra - Descarte e Reciclagem de Eletrônicos</h2>
                  <p><strong>Endereço:</strong> Av. Industrial, 493</p>
                  <p><strong>Telefone:</strong> (11) 95770-1964</p>
                  <p><strong>Horário:</strong> Aberto até 17h</p>
                  <a href="#" target="_blank" class="btn">Visitar Site</a>
                </div>
            
                <div class="card">
                  <h2>Estação de Coleta Paraíso</h2>
                  <p><strong>Endereço:</strong> São Paulo - SP</p>
                  <p><strong>Telefone:</strong> (informação não disponível)</p>
                  <a href="#" target="_blank" class="btn">Visitar Site</a>
                </div>
            
              </div>
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d49170.238151903206!2d-46.54336780399541!3d-23.65449852815229!3m2!1i1024!2i768!4f13.1!2m1!1sprincipais%20pontos%20de%20coleta%20de%20lixo%20eletronico%20santo%20andre!5e0!3m2!1spt-BR!2sbr!4v1758112682520!5m2!1spt-BR!2sbr"
                width="70%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </main>
    <footer>
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
<!-- Bootstrap JS -->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</html>