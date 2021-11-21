@extends('herois.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Herois</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('herois.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <form action="{{ route('herois.update', $Herois->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="nome" value="{{ $Herois->nome }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <select name="classe" class="form-select" value="{{ $Herois->classe }}">
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
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
