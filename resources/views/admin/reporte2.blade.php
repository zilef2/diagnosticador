@extends('layouts.app')
@section('content')
    <div class="container pt-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reporte General</li>
            </ol>
        </nav>
        <form action="{{route('reporte3')}}">
            <div class="d-flex justify-content-center">
            <div class="form-group row">
                <label for="SE">Seleccione Sector economico</label>
                <select class="form-control" name="SE" id="SE">
                    @foreach($SE as $sec)
                        <option value="{{$sec->id}}">{{$sec->nombre}}</option>
                    @endforeach
                </select>
            </div>
            </div>
            <div class="d-flex justify-content-center">
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Ir al reporte') }}
                    </button>
                </div>
            </div>
            </div>
        </form>
    </div>
@endsection
