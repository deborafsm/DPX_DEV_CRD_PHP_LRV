{{-- Extende do layout pronto --}}
@extends('herois.layout'); 
{{-- Content proto lá no herois.layout --}}
@section('content')
{{-- Nav bar do bootstrap --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-md">
        <a class="navbar-brand" href="#">Navbar</a>
    </div>
</nav>
{{-- Aonde fica a interface de criar usuário --}}
<fieldset>
    {{-- Um titulo --}}
    <legend>Cadastro de Herois</legend>
    {{-- Botão para voltar para a tela de index --}}
    <a class="btn btn-primary" href="{{route('herois.index')}}">Back</a>
{{-- Verifica se tem erro (feito em blade) --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Verifique os Campos!</strong> <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>O nome do Heroi é obrigatório</li>
            @endforeach
        </ul>
    </div>
@endif
{{-- Formulário para cadastrar um heroi --}}
    <form method="POST" action="{{route('herois.store')}}">
        {{-- evita falsas solicitações https://pt.wikipedia.org/wiki/Cross-site_request_forgery  --}}
        @csrf
        {{-- Dois campos requeridos (Nome e Classe) --}}
        <div class="mb-2 ">
            <strong>Nome</strong>
            <input type="text" id="" class="form-control" name="nome">
        </div>
        <div class="mb-2">
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
@endsection

{{-- Observações finais
    View - create.blade.php
    Model - Models/herois
    Controller - heroisController@create ->  retorna a view de create
    Controller - heroisController@store -> validação de campos e cria heroi no banco de dados
--}}