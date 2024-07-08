<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>

    </style>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <h1>Algum Título</h1>
    @if(10>5)
    <p>A condição é true</p>
    @elseif(0>-1)
    <p>Entrou no elseif</p>
    @else
    <p>A condição é falsa</p>
    @endif

    <h2>Puxando dados passados pela rota</h2>
    <p>Bem-vindo {{$nome}}, soube que você tem {{$idade}} anos e trabalha com {{$profissao}}</p>


    @for($i = 0; $i< count($arr); $i++) <p>{{$i}}</p>
        @endfor


        @php
        $nome = "Usando PHP puro dentro do blade";
        echo $nome

        @endphp


        @foreach ($nomes as $nome)
        <p>{{$loop ->index}} {{$nome}}</p>
        @endforeach


</body>

</html>