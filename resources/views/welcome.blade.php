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
        <form method="POST">
            <a class="btn btn-primary">Back</a> 
            <legend>Cadastro de Herois</legend>
            {{-- evita falsas solicitações https://pt.wikipedia.org/wiki/Cross-site_request_forgery --}}
            @csrf
            {{-- Dois campos requeridos (Nome e Classe) --}}
            <div class="mb-2 col-12">
                <strong>Nome</strong>
                <input type="text" id="" class="form-control" name="nome">
            </div>
            <div class="mb-2 col-12">
                <strong>Classe</strong>
                <select name="classe" class="form-select">
                    <option>Hunter</option>
                    <option>Priest</option>
                    <option>Mage</option>
                    <option>Warrior</option>
                    <option>Rougue</option>
                    <option>Warlock</option>
                    <option>Paladin</option>
                    <option>Druid</option>
                </select>
            </div>
            {{-- Botão de submit para criar um heroi --}}
            <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
        </form>
    </div>

@endsection
