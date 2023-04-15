@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="{{ route('Agregar_item2') }}" method="POST">
                    @method('PUT') @csrf
                    <h3>Datos del nuevo formulario</h3>

                    <label for="SE">Digite el nuevo Sector Economico</label>
                    <input type="text" name="SE" placeholder="nuevo Sector Economico" required class="form-control mb-2" />

                    <label for="FCE">Digite el numero de Factores que tendra dicho sector economico</label>
                    <input type="number" name="num_FCE" placeholder="" required class="form-control mb-2 col-md-3" />

                    <div class="d-flex justify-content-center">
                        <a type="button" href="{{ route('home') }}"
                            class="btn btn-secondary mx-2 shadow-lg hover:shadow-xl">Ir al inicio</a>
                        <button type="submit" class="btn btn-primary mx-2 shadow-lg hover:shadow-xl">Siguiente</button>
                    </div>
                </form>
                {{-- <a class="btn btn-dark btn-block" href="{{ route('home') }}">Volver</a> --}}
            </div>

            <ul class="mt-4 divide-y divide-gray-200">
                <p class="lead"><strong>Sectores economicos existentes</strong></p>
                @foreach ($sectores as $sector)
                    <li class="">
                        <div class="flex items-center space-x-4">
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900">{{ $sector->nombre }}</p>
                        </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
