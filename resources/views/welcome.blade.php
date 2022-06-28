<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>myDreamBox</title>

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
        
    </head>
    <body class="bodyWelcome">
        <div class="divCenter">
            <header class="headerPre col-12">
                <img src="/img/logo-myDreamBox.png" class="img-fluid"/>
            </header>
        </div>
        

        <br/>
        <br/>

        <section class="centerElements spacePadding">
            <p class="textWelcome">Bem-vindo ao <strong>myDreamBox</strong>, o lugar onde você pode organizar as suas metas financeiras e torná-las realidade!</p>

            <br/>
            <a href="/home">
                <button class="btn btn-success buttonWelcome">Entrar</button>
            </a>
        </section>
        <footer class="centerElements">
            <p>Ajuda</p>
        </footer>
    </body>
</html>


    
