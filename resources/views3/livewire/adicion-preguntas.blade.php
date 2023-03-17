<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header"><h2>{{ __($SE) }}</h2></div>
                <div class="card-body">
                    @if ( session('mensaje') )
                        <div class="alert alert-success">{{ session('mensaje') }}</div>
                    @endif
{{--@dd($FI,$num_FI)--}}
                    <form wire:submit.prevent="guardar_preguntas2" method="POST" action="{{ route('Agregar_preguntaf') }}">
{{--                        @method('PUT')--}}
                        @csrf
                        <br><h5 class="alert alert-info">Por favor, Digite de las preguntas de manera clara y concisa</h5>
                        @for($k=0;$k<($num_FCE);$k++)
                            <h2>{{$FCE[$k]}}</h2>
                            @for($j=0;$j<$num_FI[$k];$j++)
                                <h4><b>{{$FI_nombre[$j]}}</b></h4>
                                <div class="form">
                                    @for($i=0;$i<$num_preguntas[$j];$i++)
                                        <div class="form-inline">
                                            <input type="text"
                                                   wire:model="nombre[{{$i}}]"
{{--                                                   name="nombre[]"--}}
                                                   placeholder="pregunta #{{$i+1}}" class="form-control mb-2 col-md-8"
{{--                                                   required--}}
                                            />
                                            @error('nombre[]') <span class="error">{{ $message }}</span> @enderror
                                            <input type="number" name="peso[]" placeholder="Peso, Valor 1-100" min=1 max=100 class="form-control mb-2 col-md-4"
{{--                                                   required--}}
                                            />
                                        </div>
                                    @endfor
                                </div>
                            @endfor
                            <hr>
                        @endfor
                        <br><button class="btn btn-primary btn-block" type="submit">Terminar</button>
                    </form>

                        <hr><a class="btn btn-dark btn-block" href="{{ route('home') }}">Volver al Inicio</a>
                </div>
            </div>
        </div>
    </div>
</div>
