@extends('layouts.main')
@section('title','INDEX')
@section('content')
<h1>Teste Index</h1>
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
@endsection