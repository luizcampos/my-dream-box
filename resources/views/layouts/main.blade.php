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
        <link rel="icon" type="imagem/png" href="/img/coin.png" />

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 

        <script>
            function formatar(mascara, campo){
                var i = campo.value.length; //1, 2
                console.log(i);
                var saida = mascara.substring(0,1); //sempre #
                var texto = mascara.substring(i); //##/##/####, #/##/####, /##/####...    - pega o restante da máscara sem a qtde incial do i

                if(texto.substring(0,1) != saida){// # == # ,   # == #,   / != #.... 
                    campo.value += texto.substring(0,1); // 29 += /,    29/09 += /     - recebe todo caractere diferente de #
                }
            }
        </script>

    </head>
    <body>
        <header class="headerPos justify-content-between">
            <a href="/">
                <div class="col-4">
                    <img src="/img/logo-in-line-white.png" class="img-fluid"/>
                </div>  
            </a>
            <nav class="">
                <ul>
                    <li>Metas</li>
                    <li>Perfil</li>
                    <li>Contato</li>
                </ul>
            </nav>
        </header>

        <br/>

        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msgSuccess">{{ session('msg')}}</p>
                    @endif                    
                </div>
            </div>
        </main>

        <br/>
                    
        @yield('content')

        <footer class="centerElements">
            <p>Ajuda</p>
        </footer>
    </body>
</html>