@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="{{ route('Agregar_item4') }}" method="POST">
                    @method('PUT') @csrf
                    @if (isset($message2))
                        <div class="alert alert-danger">
                            <li>{{ $message2 }}</li>
                        </div>
                    @endif

                    @for ($i = 0; $i < count($num_FI); $i++)
                        <h3>{{ $FCE[$i] }}</h3>
                        @for ($j = 0; $j < $num_FI[$i]; $j++)
                            <label for="FCE">Digite el nuevo Factor Interno #{{ $j + 1 }} con su respectivo
                                peso</label>
                            <input type="text"  name="FI_nombre[]" placeholder="nuevo Factor Interno"
                                class="form-control mb-2 col-md-8" required />
                            <input type="number" id="peso_{{ $loop->index }}" name="FI_peso" placeholder="1-100" min=1 max=100
                                class="form-control mb-2 col-md-4" required />

                            <label for="FCE">Digite el numero de preguntas que tendrá dicho Factor Interno</label>
                            <input type="number" name="num_preguntas[]" max=40 placeholder=""
                                class="form-control mb-2 col-md-2" required />
                        @endfor
                    @endfor
                    @if (isset($message2))
                        <div class="alert alert-danger">
                            <li>{{ $message2 }}</li>
                        </div>
                    @endif
                    <input type="text" name="resultado" id="resultado" disabled placeholder="Sin valores">
                    <button class="btn btn-success btn-block" type="submit">Siguiente</button>
                </form>
                <hr>
                <a class="btn btn-dark btn-block" href="{{ route('home') }}">Volver _ fis2</a>
            </div>

        </div>
    </div>

@endsection

{{-- @section('head_scripts') --}}
{{-- @endsection --}}
