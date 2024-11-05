<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Document')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha384-ILU+3nGrT9E6c+hZXxOX7onfSBdT4PzqjT/m9zNxAPec+zVjLTVXK8u89D4p0Whw" crossorigin="anonymous">

</head>
<style>
      /* Estilo para o hover dos itens do menu */
      .navbar-nav .nav-link {
        transition: background-color 0.3s, color 0.3s;
    }
    .navbar-nav .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.2);
        color: #000;
        width: 5em;
        border-radius: 5%;
    }
    /* Alinhamento à esquerda e espaçamento no menu colapsado */
    .collapse .navbar-nav {
        align-items: flex-start;
    }
    /* Remove a animação de colapso para que o menu apareça imediatamente */
    .navbar-collapse.collapse.show {
        transition: none;
        margin-top: 2em;
    }
    .nowrap {
        white-space: nowrap; /* Impede a quebra de linha */
    }

</style>

<body>
<header>
    <nav class="bg-success navbar navbar-expand-lg">
        <div class="container-fluid">
            <!-- Logo and Title -->
            <a href="{{ url('home') }}" class="d-flex align-items-center">
                <img src="{{ asset('icons/logo.png') }}" class="logo" alt="MoneyControl">
                <h1 class="ms-2 text-white">MoneyControl</h1>
            </a>

            <!-- Navbar Toggle for Small Screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Greeting and Dropdown Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center ms-lg-auto">
                    <!-- Greeting -->
                    <div class="me-5 text-white nowrap">
                        Olá, {{ Auth::user()->name }}!
                    </div>
                    
                    <!-- Direct Menu Items for Small Screens -->
                    <div class="d-lg-none">
                        <a class="nav-link text-white" href="{{ route('profile.edit') }}">Meu Perfil</a>
                        <a class="nav-link text-white" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                    </div>

                    <!-- Dropdown Menu for Larger Screens -->
                    <div class="dropdown d-none d-lg-block" style="cursor: pointer;">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('entrada') }}">Movimentações</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">Meu Perfil</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- Formulário de logout oculto -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>


<main class="container">
    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>