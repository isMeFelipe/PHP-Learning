<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>

    <title>@yield('title')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse" id="navbar"></div>
            <a href="/" class="navbar-brand">
                <img src="/img/logo.svg" alt="logo.svg">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link">Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Criar Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Cadastrar</a>
                </li>
            </ul>

        </nav>
    </header>

    @yield('content')

    <footer>
        <p>HDC Events &copy; 2024</p>
    </footer>
</body>

</html>