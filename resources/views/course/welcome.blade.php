<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>Laravel</title>

</head>
<h1>Olá mundo</h1>
<body>
    <img src="/img/img.jpg"  alt="">
    @if ($nome == 'Debora F')

    @else
        <p> Não é debora </p>
    @endif
    {{-- As váriaveis estão declaradas dentro de rotas "web" --}}
    <p>{{ $nome }} {{ $idade }} {{ $profissao }}</p>
    @for ($i = 0; $i < count($frutas); $i++)
        <p>{{ $frutas[$i] }}</p>
    @endfor
    @php
        $caneta = 'azul';
        echo "caneta $caneta";
    @endphp
    {{-- ACESSANDO O Indice dos valores utilizando o $loop {{ $loop->index }} --}}
    @foreach ($nomes as $nome)
        <p>Nome de número {{ $loop->index }} -  {{ $nome }} </p>
    @endforeach
    {{-- Comentário em blade --}}
    {{-- Comentário de blade que não aparece --}}
    <script src="/js/script.js"></script>
</body>

</html>
