@extends('layouts.app')
@section('content')
<div class="container"><div class="row justify-content-center"><div class="col-lg-8">
    <form action="{{ route('Agregar_item2')}}" method="POST">
    @method('PUT') @csrf
        <h3>Datos del nuevo formulario</h3>

        <label for="SE">Digite el nuevo Sector Economico</label>
        <input type="text" name="SE" placeholder="nuevo Sector Economico" class="form-control mb-2" required/>

        <label for="FCE">Digite el numero de Factores que tendra dicho sector economico</label>
        <input type="number" name="num_FCE" placeholder="" class="form-control mb-2 col-md-3" required/>

        <button class="btn btn-success btn-block" type="submit">Siguiente</button>
    </form>
    <a class="btn btn-dark btn-block" href="{{ route('home') }}">Volver</a>
</div></div></div>
@endsection
