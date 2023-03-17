

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            {{ __('Preguntas Almacenadas') }}
            <b><a class="nav-link" href="{{ route('Agregar_items', auth::User()->id) }}"> {{ __("Agregar pregunta") }} </a></b>
        </div>
        <div class="card-body">
            <ol start="1">
                @forelse($preguntas as $pre)
                    <li>{{$pre->nombre}}&nbsp;
                    <a wire:click="edit({{ $pre->id }})" class="text-right ">Editar</a>
                    </li><br/>
                    @if($pre->id == $selected_id)
                    @if($updateMode)
                        @include('livewire.update')
                    @endif
                    @endif
                @empty
                    No hay preguntas que listar
                @endforelse
            </ol>
        </div>
    </div>

    <hr><div class="card">
        <div class="card-header">{{ __('Factores internos Almacenadas') }}</div>
        <div class="card-body">
            <ol start="1">
                @forelse($FI as $pre1)
                    <li>{{$pre1->nombre}}</li><br/>
                @empty
                    no hay Factores que listar
                @endforelse
            </ol>
        </div>
    </div>

    <hr> <div class="card">
    <div class="card-header"><h2>{{ __('Factores clave de exito') }}</h2></div>
        <div class="card-body">
            <ol start="1">
                @forelse($FCE as $pre3)
                    <li>{{$pre3->nombre}}</li><br/>
                @empty
                    no hay Factores que listar
                @endforelse
            </ol>
        </div>
    </div>

    <hr> <div class="card">
        <div class="card-header">{{ __('Sectores economicos') }}</div>
        <div class="card-body">
            <ol start="1">
                @forelse($SE as $pre4)
                    <li>{{$pre4->nombre}}</li><br/>
                @empty
                    no hay Sectores que listar
                @endforelse
            </ol>
        </div>
    </div>
</div>
