<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
    <link rel="icon" type="image/jpg" href="{{ asset('favicon.ico')}}"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <img id="logo" src="{{ asset('img/logo.png')}}" alt="logo">
        <nav>
            <ul>
                <li><a href="">HOME</a></li>
            </ul>
        </nav>
    </header>
    <div id="container">
        <h1>PÁGINA PRINCIPAL</h1>
        <div id="content">
            <div id="mensajes">
                <h2>Mensajes</h2>
            </div>
            <div id="botones">
                <form action="../../form-result.php" method="post">
                    <input class="box" type="search" name="busquedamensajes" placeholder="Buscar mensajes...">
                    <span class="icon"><button id="boton2"><i class="fa fa-search"></i></button></span>  
                </form><br><br>
                <form action="" method="post">
                    <input id="boton" type="submit" value="Nuevo mensaje">
                </form>
            </div>
        </div>
        
    </div>
    <footer>
        <p>© 2023 Proyecto realizado por Ana Arenilla Villalva y Laura Sánchez Ayllón</p>
    </footer>
</body>
</html>