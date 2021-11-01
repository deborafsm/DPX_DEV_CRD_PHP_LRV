@extends('herois.layout');
@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-md">
        <a class="navbar-brand" href="#">Navbar</a>
    </div>
</nav>

<fieldset>
    <legend>Cadastro de Herois</legend>
    <a class="btn btn-primary" href="{{route('herois.index')}}">Back</a>

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
    <form method="POST" action="{{route('herois.store')}}">
        @csrf
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
        <button type="submit" class="btn btn-primary">Submit</button>
</fieldset>
</form>
@endsection