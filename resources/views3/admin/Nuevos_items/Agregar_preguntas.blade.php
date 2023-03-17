@extends('layouts.app')
@section('content')
<div class="container pt-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header"><h2>{{ session('SE') }}</h2></div>
                    <div class="card-body">
                        @if ((count($errors) > 0)||isset($message2))
                            <div class="alert alert-danger">
                                <p>Corrige los siguientes errores:</p><br>
                                <ul>
                                    <li>{{$message2}}</li>
                                    @foreach ($errors->all() as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('mensaje'))
                            <div class="alert alert-success">{{ session('mensaje') }}</div>
                        @endif

                        @php($contadorFI=0)
                        <form  method="POST" action="{{ route('Agregar_preguntaf') }}">
                            @method('PUT')
                            @csrf
                            <br><h5 class="alert alert-info">Por favor, Digite de las preguntas de manera clara y concisa</h5>
                            @for($k=0;$k<($num_FCE);$k++)
                                <h2>{{$FCE[$k]}}</h2>
                                @for($j=0;$j<$num_FI[$k];$j++)
                                    <h4><b>{{$FI_nombre[$contadorFI]}}</b></h4>
                                    @php($contadorFI=$contadorFI+1)
                                    <div class="form">
                                        @for($i=0;$i<$num_preguntas[$j];$i++)
                                            <div class="form-inline">
                                                <input type="text" name="nombre[]" placeholder="pregunta #{{$i+1}}" class="form-control mb-2 col-md-8" required/>
                                                <input type="number" name="peso[]" placeholder="Peso, Valor 1-100" min=1 max=100  class="form-control mb-2 col-md-4" required/>
                                            </div>
                                        @endfor
                                    </div>
                                @endfor
                                <hr>
                            @endfor
                            <br><button class="btn btn-primary btn-block" type="submit">Terminar</button>
                        </form>
                        @if (isset($message2))
                            <div class="alert alert-danger">
                                <li>{{$message2}}</li>
                            </div>
                        @endif
                        <hr><a class="btn btn-dark btn-block" href="{{ route('home') }}">Volver al Inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
