<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar bg-primary  navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Gov Eventos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Apagar eventos criados
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/produto/excluir/2">Evento 2</a></li>
                                <li><a class="dropdown-item" href="/produto/excluir/3">Evento 3 </a></li>
                                <li><a class="dropdown-item" href="/produto/excluir/4">Evento 4</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tipo_eventos/novo">Criar eventos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Visualizar eventos criados
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/produto/ver/2">Evento 2</a></li>
                                <li><a class="dropdown-item" href="/produto/ver/3">Evento 3 </a></li>
                                <li><a class="dropdown-item" href="/produto/ver/4">Evento 4</a></li>
                            </ul>
                        </li>




                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Editar eventos criados
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/produto/editar/2}">Evento 2</a></li>
                                <li><a class="dropdown-item" href="/produto/editar/3">Evento 3 </a></li>
                                <li><a class="dropdown-item" href="/produto/editar/4}">Evento 4</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="content">
        @yield('conteudo')
    </section>

    <section class="author">
        @yield('autor')
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
