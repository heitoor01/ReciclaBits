<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problemas com login</title>
    <link rel="stylesheet" href="{{ asset('css/loginIssues.css') }}">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center gap-2" href="index.html">
                    <img src="img/ReciclaBits.png" alt="logo" class="logo" onclick="goHome()" />
                    <span>ReciclaBits</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="map.html">Mapa</a></li>
                        <li class="nav-item"><a class="nav-link" href="contato.html">Contato</a></li>
                        <li class="nav-item"><a class="nav-link" href="sobreNos.html">Sobre nós</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">Como descartar lixo eletrônico?</div>
                <div class="faq-answer">
                    Você pode levar seus aparelhos até um de nossos pontos de coleta parceiros e garantir que sejam
                    reciclados corretamente.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">Existe algum programa de recompensa?</div>
                <div class="faq-answer">
                    Sim! A cada descarte correto você acumula pontos que podem ser trocados por descontos e benefícios.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">O que é considerado lixo eletrônico?</div>
                <div class="faq-answer">
                    Todo equipamento elétrico ou eletrônico em desuso, como celulares, computadores, baterias, cabos e
                    eletrodomésticos de pequeno porte.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Preciso pagar algo para descartar o e-lixo?</div>
                <div class="faq-answer">
                    Não. O descarte é gratuito e garante que os materiais tenham o destino correto.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Quais são os benefícios de reciclar eletrônicos?</div>
                <div class="faq-answer">
                    Além de evitar a contaminação do meio ambiente, a reciclagem recupera materiais valiosos e gera
                    novos recursos para a indústria.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">O que acontece com os aparelhos depois que são coletados?</div>
                <div class="faq-answer">
                    Eles são encaminhados a empresas especializadas que desmontam os componentes e separam os materiais
                    para reciclagem.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Minha empresa pode se tornar parceira da ReciclaBits?</div>
                <div class="faq-answer">
                    Pode sim. Basta entrar em contato conosco para conhecer as condições de parceria e os benefícios
                    oferecidos.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Como posso acompanhar os pontos de coleta mais próximos de mim?</div>
                <div class="faq-answer">
                    No nosso site você encontra um mapa interativo com a localização de todas as coletoras cadastradas.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Todos os tipos de eletrônicos podem ser reciclados?</div>
                <div class="faq-answer">
                    A maioria sim, mas alguns itens, como lâmpadas e pilhas, precisam de tratamento especial e são
                    coletados separadamente.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Como entro em contato em caso de dúvidas?</div>
                <div class="faq-answer">
                    Você pode enviar um e-mail para reciclabits@gmail.com ou acessar a área de contato disponível no site.
                </div>
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

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

<script src="{{ asset('js/contato.js') }}"></script>


</html>