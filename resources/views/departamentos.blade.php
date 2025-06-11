<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <title>Departamentos</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex flex-column justify-content-center align-items-center">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="navbar-brand">
                        <img src="{{ asset('images/Logo_Etec.png') }}" alt="Logo" class="d-inline-block align-text-bottom">
                    </a>
                    <a class="nav-link active" href="{{ route('index') }}">Home</a>
                    <a class="nav-link active" href="{{ route('cursos') }}">Cursos</a>
                    <a class="nav-link disabled" aria-disabled="true" href="#"><strong>Departamentos</strong></a> <!-- desabilitado -->
                    <a class="nav-link active" href="{{ route('contato') }}">Contato</a>

                    <!-- Botão modo escuro -->
                    <button id="themeToggle" onclick="toggleTheme()" class="btn btn-outline-light">
                        🌙
                    </button>
                </div>
            </div>
        </div>
    </nav>

    &nbsp;

    <div class="container text-center">
        <div class="row text-center">
            <div class="col">
                <h3>Secretaria</h3>
                <div class="line"></div>
            </div>
            <div class="row">
                <h5>Horários</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Segunda</th>
                            <th scope="col">Quarta</th>
                            <th scope="col">Sexta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>08h00min. às 09h30min.</td>
                            <td>08h00min. às 09h30min.</td>
                            <td>08h00min. às 09h30min.</td>
                        </tr>
                        <tr>
                            <td>14h30min. às 15h30min.</td>
                            <td>14h30min. às 15h30min.</td>
                            <td>14h30min. às 15h30min.</td>
                        </tr>
                        <tr>
                            <td>19h30min. às 20h30min.</td>
                            <td>19h30min. às 20h30min.</td>
                            <td>19h30min. às 20h30min.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container text-center my-5">
                <div class="contact-section">
                    <h4 class="section-title">Contato</h4>
                    <p>
                        E-mail: <a href="mailto:e211acad@cps.sp.gov.br">e211acad@cps.sp.gov.br</a><br>
                        Telefones: (11) 2045-4025 | (11) 2045-4026 | (11) 2045-4009
                    </p>
                </div>

                <div class="line"></div>
                <div class="contact-section">
                    <h4 class="section-title">Coordenadoria</h4>
                    <p><strong>Coordenadores</strong></p>
                    <p>
                        Giovanna Littiere (Novotec Administração)<br>
                        Leandro (Novotec Logística)<br>
                        Marcelo Collado (Novotec Desenvolvimento de Sistemas)<br>
                        Cibelle Ferreria Françoso (Novotec RH)<br>
                        Jeferson Roberto de Lima (Novotec Desenvolvimento de Sistemas AMS)
                    </p>
                    <p><strong>Contato</strong><br>Telefones: (11) 2045-4018</p>
                </div>

                <div class="line"></div>
                <div class="contact-section">
                    <h4 class="section-title">Diretoria</h4>
                    <p><strong>Diretora</strong><br>Amanda Bueno</p>
                    <p><strong>Contato</strong><br>
                        E-mail: <a href="mailto:e211dir@cps.sp.gov.br">e211dir@cps.sp.gov.br</a><br>
                        Telefones: (11) 2045-4021 | (11) 2045-4003
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-container"></footer>

    <!-- Seu script personalizado -->
    <script src="{{ asset('js/theme-toggle.js') }}"></script>
</body>

</html>