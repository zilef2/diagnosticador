@extends('layouts.app')
@section('content')
<div class="container"><div class="row justify-content-center"><div class="col-lg-8">
    <form action="{{ route('Agregar_item2')}}" method="POST">
    @method('PUT') @csrf
        <h3>Datos del nuevo formulario</h3>

        <label for="SE">Digite el nuevo Sector Economico</label>
        <input type="text" name="SE" placeholder="nuevo Sector Economico" class="form-control mb-2" required/>

        <label for="FCE">Digite el numero de Factores Clave de Exito que tendra dicho sector economico</label>
        <input type="number" name="num_FCE" placeholder="" class="form-control mb-2 col-md-3" required/>

        <button class="btn btn-success btn-block" type="submit">Siguiente</button>
    </form>
    <a class="btn btn-dark btn-block" href="{{ route('home') }}">Volver</a>
    <button class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Botón 1
      </button>
      <button class="btn bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
        Botón 2
      </button>
</div></div></div>
@endsection
