<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">

        <!-- JavaScript Bundle with Popper - Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

        <!-- Icons -->
        <script src="https://unpkg.com/phosphor-icons"></script>

    </head>
    <body>
        <header class="headerPos col-12">
            <a href="/">
                <div class="col-4 col-md-4 col-xl-4 col-sm-4">
                    <img src="/img/logo-in-line-white.png" class="img-fluid"/>
                </div>  
            </a>

            <nav class="col-6 col-md-6  col-xl-6 col-sm-6">
                <ul>
                    <li>Metas</li>
                    <li>Perfil</li>
                    <li>Contato</li>
                </ul>
            </nav>
        </header>

        <br/>
                    
        @yield('content')

        <footer class="centerElements">
            <h3>Ajuda</h3>
        </footer>
    </body>
</html>
