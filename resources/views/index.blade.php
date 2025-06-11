<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex flex-column justify-content-center align-items-center">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="navbar-brand">
                        <img src="{{ asset('images/Logo_Etec.png') }}" alt="Logo" class="d-inline-block align-text-bottom">
                    </a>
                    <a class="nav-link disabled" aria-disabled="true" href="#"><strong>Home</strong></a> <!-- desabilitado -->
                    <a class="nav-link active" href="{{ route('cursos') }}">Cursos</a>
                    <a class="nav-link active" href="{{ route('departamentos') }}">Departamentos</a>
                    <a class="nav-link active" href="{{ route('contato') }}">Contato</a>

                    <!-- Botão modo escuro -->
                    <button id="themeToggle" onclick="toggleTheme()" class="btn btn-outline-light">
                        🌙
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="container text-center">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/BLOCO-A.png') }}" class="d-block" alt="First Image">
                    <div class="carousel-caption d-flex justify-content-center align-items-center">
                        <div class="col">
                            <div class="row">
                                <h1 class="text-white">Conheça nossa infraestrutura</h1>
                            </div>
                            <div class="row">
                                <h5 class="text-white">Contamos com laborátorios de química, computadores, enfermaria, sala maker, auditório e mais</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/CURSOS.png') }}" class="d-block" alt="Second Image">
                    <div class="carousel-caption d-flex justify-content-center align-items-center">
                        <div class="col">
                            <div class="row">
                                <h1 class="text-white">Conheça nosos cursos</h1>
                            </div>
                            <div class="row">
                                <h5 class="text-white">Logistica, Desenvolvimento de sistemas, Recursos Humanos, Adiministração e Serviço Jurídico</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">próximo</span>
            </button>
        </div>

    </div>

    &nbsp;

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h5>Eventos</h5>
                <div class="line"></div>
                &nbsp;
                <h5>Não há eventos no momento, volte mais tarde</h5>
            </div>
            <div class="col">
                <h5>Links úteis</h5>
                <div class="line"></div>
                &nbsp;
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="width: 18rem;">
                            Regimento
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="width: 18rem;">
                            Manual do aluno
                        </div>
                    </div>
                </div>
                &nbsp;
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="width: 18rem;">
                            NSA
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="width: 18rem;">
                            Vestibulinho
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    &nbsp;

    <footer class="footer-container"></footer>

    <!-- Seu script personalizado -->
    <script
        src="{{ asset('js/theme-toggle.js') }}">
    </script>
</body>

</body>

</html>