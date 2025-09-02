<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>interando sobre array associativo</h1>

   <p>A quantidade de navios enviado é:     {{$quantidade}}</p>

   <ul>
    @foreach ($produtos as $produto)
        <li>{{$produto}}
            @if ($produto == 'Produto B')
            <strong>- Produto em Promoção</strong>
            @endif
        </li>
        @endforeach
   </ul>
</body>
</html>