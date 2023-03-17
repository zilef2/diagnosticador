<div class="container">
    @if((session('SE_nombre')!="")&&($hay_respuestas))
    <h2>Sector economico: {{session('SE_nombre')}}</h2>
<section>
    <div class="row">
        <table class="table table-striped table-hover w-100">
            <thead class="thead-dark">
            <tr>
                <th>
                    <a wire:click.prevent="sortByp('nombre')" role="button" href="#">
{{--                        @include('admin._sort-icon', ['field' => 'name'])--}}
                    </a>
                </th>
{{--                <th><a wire:click.prevent="sortByp('Peso')" role="button" href="#">Peso</a></th>--}}
                <th><a role="button" href="">Promedio</a></th>
                <th><a role="button" href="">Peso</a></th>
                <th><a role="button" href="">Edición</a></th>
            </tr>
            </thead>
            <tbody>

            @foreach ($los_pregun as $i=>$pre1)

                <th class="table-info text-center lead " COLSPAN="4"><b>{{$los_FCE[$i]->nombre}}</b></th>
                @foreach ($pre1 as $j=>$pre2)
                    <tr>
                    <th COLSPAN="1">{{$los_FI[$i][$j]->nombre}}</th>
                    <th >{{number_format($prom_FI[$i][$j],2)}}</th>
                    <th >{{$los_FI[$i][$j]->peso}}%</th>
                    <th></th>
                    </tr>
                    @foreach ($pre2 as $k=>$pre3)
                        <tr>
                            <td>{{ $pre3->nombre }}</td>
                            <td>{{ number_format($los_proms_preguntas[$i][$j][$k],2) }}</td>
                            <td>{{ $pre3->peso}}%</td>

                            <td><a wire:click="edit({{ $pre3->id }})" class="">Editar Variable</a></td>
                            {{--  @if($contact->created_at) <td>{{ $contact->created_at->format('d-m-Y') }}</td>@endif--}}
                        </tr>
                        @if($pre3->id == $selected_id)
                            @if($updateMode)
                                <tr>
                                    <td COLSPAN="4">
                                @include('livewire.update')
                                    </td>
                                </tr>
                            @endif
                        @endif
                    @endforeach
                @endforeach
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col text-right text-muted">
            Mostrando {{ $preguntas->firstItem() }} - {{ $preguntas->lastItem() }} de {{ $preguntas->total() }} Variables
        </div>
    </div>
</section>
    @else
        <strong>No existen respuestas para este sector economico</strong>
    @endif
</div>
