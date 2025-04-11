<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <title>Cursos</title>
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
                    <a class="nav-link disabled" aria-disabled="true" href="#"><strong>Cursos</strong></a> <!-- desabilitado -->
                    <a class="nav-link active" href="{{ route('departamentos') }}">Departamentos</a>
                    <a class="nav-link active" href="{{ route('contato') }}">Contato</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h5>DESENVOLVIMENTO DE SISTEMAS</h5>
                <div class="line"></div>
                &nbsp;
                <p>Aprenda a criar sites, apps e sistemas inteligentes com linguagens como HTML, JavaScript e Python.</p>
            </div>
            <div class="col">
                <h5>ADMINISTRAÇÃO</h5>
                <div class="line"></div>
                &nbsp;
                <p>Desenvolva habilidades em gestão, liderança, marketing e finanças para o mundo dos negócios.</p>
            </div>
            <div class="col">
                <h5>RECURSOS HUMANOS</h5>
                <div class="line"></div>
                &nbsp;
                <p>Aprenda a recrutar, treinar e valorizar pessoas, promovendo um ambiente organizacional saudável.</p>
            </div>
        </div>

        &nbsp;

        <div class="row">
            <div class="col">
                <div class="line"></div>
                <h5>SERVIÇOS JURÍDICOS</h5>
                <div class="line"></div>
                &nbsp;
                <p>Entenda leis, ética e práticas jurídicas que regem o ambiente empresarial e o cotidiano das pessoas.</p>
            </div>
            <div class="col">
                <div class="line"></div>
                <h5>CONTABILIDADE</h5>
                <div class="line"></div>
                &nbsp;
                <p>Domine registros financeiros, tributos e análise de custos para atuar no setor contábil com excelência.</p>
            </div>
            <div class="col">
                <div class="line"></div>
                <h5>LOGÍSTICA</h5>
                <div class="line"></div>
                &nbsp;
                <p>Aprenda a gerenciar estoques, transportes e cadeias de suprimentos de forma estratégica e eficiente.</p>
            </div>
        </div>
    </div>

    &nbsp;

    <footer class="footer-container"></footer>
</body>

</html>