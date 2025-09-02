<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1><strong>Dados do funcionário: </strong></h1>
    <ul>
        
    @foreach  ($dados as $chave => $valor)
        <li>{{$chave}} = {{$valor}}</li>
    @endforeach
    </ul>


</body>
</html>