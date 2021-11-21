@extends('herois.layout');
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Herois</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('herois.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
            {{$Herois->nome}}
        </div>
        
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Classe:</strong>
            {{$Herois->classe}}
        </div>
    </div>
</div>
@endsection