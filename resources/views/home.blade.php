<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
    <link rel="icon" type="image/jpg" href="{{ asset('favicon.ico')}}"/>
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
        
        <h1>Página principal</h1>
    </div>
    
    
</body>
</html>