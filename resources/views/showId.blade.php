@extends('layouts.main')
@section('title', 'DebyPx')
@section('content')
 
    
    {{-- Botão para voltar para a tela de index --}}
    
    {{-- Verifica se tem erro (feito em blade) --}}
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Verifique os Campos!</strong> <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>O nome do Heroi é obrigatório</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    {{-- Formulário para cadastrar um heroi --}}

    <div class="container_principal">
        <p>Exibindo o heroi de número {{$id}}</p>
    </div>

@endsection
