@extends('layouts.app')
@section('content')
    <div class="container"><div class="row justify-content-center"><div class="col-lg-8">
    <form action="{{ route('Agregar_item3')}}" method="POST">
    @method('PUT') @csrf
        <h3>Factores Claves</h3>
        <input type="hidden" name="SE" value="{{$SE}}">
        <input type="hidden" name="num_FCE" value="{{$num_FCE}}">
        @for($i=0;$i<$num_FCE;$i++)
            <label for="FCE">Digite el nuevo Factor Clave de Exito #{{$i+1}}</label>
            <input type="text" name="FCE[]" placeholder="nuevo FCE" class="form-control mb-2 col-md-8" required/>

            <label for="FCE">Digite el numero de Factores Internos que tendrá dicho Factor clave de exito</label>
            <input type="number" name="num_FI[]" placeholder="#" max=40 class="form-control mb-2 col-md-2" required/>
        @endfor
        <button class="btn btn-success btn-block" type="submit">Siguiente</button>
    </form>
    <a class="btn btn-dark btn-block" href="{{ route('home') }}">Volver</a>
    </div></div></div>
    fis1
@endsection
