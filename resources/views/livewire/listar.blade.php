<div class="col-md-12">
    <h1 class="text-center">{{ __('Banco de Datos') }}</h1>
    @foreach($sector as $i=>$secto)
    <div class="card">
        <div class="card-header"><h3>{{$secto->nombre}}</h3></div>
        <div class="card-body">
            @foreach($los_FCE[$i] as $j=>$pre1)
                <h4>{{$pre1->nombre}}</h4><br>
                @foreach($los_FI[$i][$j] as $k=>$pre2)
                    <h6><b>{{$pre2->nombre}} <small class="font-italic">{{$pre1->nombre}}</small></b></h6>
                    <ol start="1">
                    @foreach($los_pregun[$i][$j][$k] as $l=>$pre3)
                    <li>{{$pre3->nombre}}&nbsp;<b>{{$pre3->peso}}%</b>
                        <a wire:click="edit({{ $pre3->id }})" class="text-right ">Editar</a>
                        </li><br/>
                        @if($pre3->id == $selected_id)
                            @if($updateMode)
                                @include('livewire.update')
                            @endif
                        @endif
                    @endforeach
                    </ol>
                @endforeach
            @endforeach
        </div>
    </div>
    @endforeach
</div>
