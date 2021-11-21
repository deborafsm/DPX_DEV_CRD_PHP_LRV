@extends('herois.layout');
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('herois.create') }}"> Criar novo Heroi</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Classe</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($Herois as $Heroi)
    <tr>
        <td>{{ $Heroi->id }}</td>
        <td>{{ $Heroi->nome }}</td>
        <td>{{ $Heroi->classe }}</td>
        <td>
            <form action="{{ route('herois.destroy',$Heroi->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('herois.show',$Heroi->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('herois.edit',$Heroi->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
{{ $Herois->links() }}
@endsection