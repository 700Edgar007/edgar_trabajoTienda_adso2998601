<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <nav class="nav">
        <a class="nav-link active" aria-current="page" href="#">Manejpo basico de inventario</a>
        <a class="nav-link" href="{{route('productos.index')}}">Productos</a>
        <a class="nav-link" href="{{route('movimiento.index')}}">MOvimiento </a>
        <a class="nav-link" hrft="/">home</a>
      </nav>

<div class="container">
    @yield('content');
</div>    
</body>
</html>