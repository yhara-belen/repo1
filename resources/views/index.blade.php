<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista Productos</h1>
    <br>
    @foreach($productos as $producto)
    {{$producto->codigo}}
    {{$producto->nombre}}
    <br>
    @endforeach
</body>
</html>