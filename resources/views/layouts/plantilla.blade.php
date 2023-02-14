<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
    <link rel="icon" type="image/jpg" href="{{ asset('favicon.ico')}}"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <a href="{{route('home')}}"><img id="logo" src="{{ asset('img/logo.png')}}" alt="logo"></a>
        <nav>
            <ul>
                @foreach ($categorias as $categoria)
                <li><a href="{{route('home',$categoria)}}">{{$categoria->nombre}}</a></li>
                @endforeach
            </ul>
        </nav>
        <div id="botonesSesion">
            <form action="" method="post">
                <input id="botonUsuario" type="submit" value="Sign in">
            </form>
            <form action="" method="post">
                <input id="botonUsuario" type="submit" value="Log in">
            </form>
            <!-- Cuando haya iniciado sesión debe aparecer un botón de cerrar sesión -->
        </div>
    </header>
    <div id="container">
    <!-- Los yield se ponen en el contenido que si va a variar -->
    @yield('content')
    </div>
    <footer>
        <p>© 2023 Proyecto realizado por Ana Arenilla Villalba y Laura Sánchez Ayllón</p>
    </footer>
</body>
</html>