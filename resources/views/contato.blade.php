<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <title>Contato</title>
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
                    <a class="nav-link active" href="{{ route('departamentos') }}">Departamentos</a>
                    <a class="nav-link disabled" aria-disabled="true" href="#"><strong>Contato</strong></a> <!-- desabilitado -->

                    <!-- Botão modo escuro -->
                    <button id="themeToggle" onclick="toggleTheme()" class="btn btn-outline-light">
                        🌙
                    </button>
                </div>
            </div>
        </div>
    </nav>

    &nbsp;

    <div class="d-flex justify-content-center align-items-center">
        <form class="w-50">
            <div class="mb-3">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Seu nome aqui">
            </div>
            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="addon-wrapping">@</span>
                <input type="email" class="form-control" placeholder="Seu email aqui" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="O assunto aqui">
            </div>
            <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="O desenvolvimento aqui"></textarea>
            </div>
        </form>
    </div>

    &nbsp;

    <footer class="footer-container"></footer>

    <!-- Seu script personalizado -->
    <script src="{{ asset('js/theme-toggle.js') }}"></script>
</body>

</html>