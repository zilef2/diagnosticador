@extends('layouts.app')

@section('content')


<form action="{{ route('pregunta.update', auth::User()->id) }}" method="POST" class="justify-content-center">
    @method('PUT') @csrf
    <h2>Editar pregunta</h2>
    <div class="form-row">
        <div class="form-group col-md-6"><label for="Nombre">{{ __('Nombre') }}</label></div>
        <div class="form-group col-md-6"><input class="form-control" type="number" name="Nombre" placeholder="Nombre" value="{{auth()->user()->Nombre}}"></div>
    </div>
</form>

@endsection
