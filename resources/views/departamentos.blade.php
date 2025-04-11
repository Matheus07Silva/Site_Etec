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
                        <img src="{{ asset('storage/Logo_Etec.png') }}" alt="Logo" class="d-inline-block align-text-bottom">
                    </a>
                    <a class="nav-link active" href="{{ route('index') }}">Home</a> 
                    <a class="nav-link active" href="{{ route('cursos') }}">Cursos</a>
                    <a class="nav-link disabled" aria-disabled="true" href="#"><strong>Departamentos</strong></a> <!-- desabilitado -->
                    <a class="nav-link active" href="{{ route('contato') }}">Contato</a>
                </div>
            </div>
        </div>
    </nav>

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
            <div>
                <h3>Contato</h3>
                <h5>E-mail: e211acad@cps.sp.gov.br</h5>
                <h5>Telefones: (11) 2045-4025 | (11) 2045-4026 | (11) 2045-4009</h5>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col">
                <h3>Coordenadoria</h3>
                <div class="line"></div>
            </div>
            <div class="row">
                <h3>Coordenadores</h3>
                <br>
                <h5>Giovanna Littiere (Novotec Administração)</h5>
                <h5>Leandro (Novotec Logística)</h5>
                <h5>Marcelo Collado (Novotec Desenvolvimento de Sistemas)</h5>
                <h5>Cibelle Ferreria Francoso (Novotec RH)</h5>
                <h5>Jeferson Roberto de Lima (Novotec Desenvolvimento de Sistemas AMS)</h5>
            </div>
            <div>
                <h3>Contato</h3>
                <h5>Telefones: (11) 2045-4018 </h5>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col">
                <h3>Diretoria</h3>
                <div class="line"></div>
            </div>
            <div class="row">
                <h3>Diretora</h3>
                <br>
                <h5>Amanda Bueno</h5>
            </div>
            <div>
                <h3>Contato</h3>
                <h5>E-mail: e211dir@cps.sp.gov.br</h5>
                <h5>Telefones: (11) 2045-4016 | (11) 2045-4011</h5>
            </div>
        </div>
    </div>

    &nbsp;
    <footer class="footer-container"></footer>
</body>

</html>