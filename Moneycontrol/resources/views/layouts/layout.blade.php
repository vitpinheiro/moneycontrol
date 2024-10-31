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
<body>
    
<header>
    <nav class=" bg-success navbar navbar-expand-lg">
        <div class="container-fluid">
            <a href="{{ url('home') }}" class="d-flex align-items-center">
                <img src="{{asset('icons/logo.png') }}" class="logo" alt="MoneyControl"><h1>MoneyControl</h1>
            </a>
            <div class="d-flex align-items-center">
                <div class="dropdown me-2">
                    <button class="entrar-navbar" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-chevron-down"></i> 
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ url('profile.edit') }}">Meus dados</a></li>
                        <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<main class="container">
    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>