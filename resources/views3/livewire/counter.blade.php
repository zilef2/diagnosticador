<div class="container">
    @if(($SE!=""))
    <h2>Sector economico: {{$SE}}</h2>
    <div class="row mb-4">
        <div class="col form-inline">
            <label for="pages">Resultados por pagina
            <select wire:model="perpage" name="pages" class="form-control">
                <option>5</option>
                <option>10</option>
                <option>20</option>
            </select></label>
        </div>

        <div class="col">
            <input wire:model="search" class="form-control" type="text" placeholder="Buscar Factores Internos por nombre">
        </div>
    </div>

    <div class="row">
        <table class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th>
                <a wire:click.prevent="sortBy('id')" role="button" href="#">nombre</a></th>
                <th><a role="button" href="">Calificacion</a></th>
                <th><a role="button" href="">Peso</a></th>
                <th><a role="button" href="">Total?</a></th>
                <th><a role="button" href="">Fort o Debil</a></th>
                <th><a role="button" href="">F(x)</a></th>
                <th><a role="button" href="">1-F(x)</a></th>
            </tr>
            </thead>
            <tbody>
{{--            @dd($FI,$indices)--}}
            @foreach ($FI as $fis)
{{--                @if($indices[$loop->iteration]!=0)--}}
                <tr>
                    <td>{{ $fis->nombre }}</td>
{{--                    <td>{{ $fis->calificacion}}</td>--}}
                    <td>{{ number_format($proms[$fis->id],2) }}</td>
                    <td>{{ $fis->peso}}%</td>
                    <td>{{ number_format($total[$fis->id],2) }}</td>
                    <td>{{ $vector_calificacion[$fis->id] }}</td>
                    <td>{{ number_format($vector_FX[$fis->id],2) }}</td>
                    <td>{{ number_format($vector_FX1[$fis->id],2) }}</td>

                </tr>
{{--                @endif--}}
            @endforeach
            </tbody>


        </table>
    </div>

    <div class="row">
        <div class="col text-right text-muted">
            Mostrando {{ $FI->firstItem() }} - {{ $FI->lastItem() }} de {{ $FI->total() }} resultados
        </div>
        <div class="col">
            {{$FI->links()}}
        </div>
    </div>
{{--    explicacion de la notacion--}}
        <hr>

        <p>
        <button class="btn btn-primary btn-md" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Notacion de Fort o Debil
        </button>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <p><b>DMy</b> = Debilidad Mayor (Peor)</p>
            <p><b>DMn</b> = Debilidad Mayor </p>
            <p><b>FMn</b> = Fortaleza Mayor </p>
            <p><b>FMy</b> = Fortaleza Mayor (Mejor)</p>
        </div>
    </div>


<hr>
<br>
    <h2>Preguntas</h2>
        <div class="col text-right text-muted">
            Mostrando {{ $preguntas->firstItem() }} - {{ $preguntas->lastItem() }} de {{ $preguntas->total() }} resultados
        </div>
    <div class="row mb-4">
        <div class="col form-inline">
            <label for="pages">Preguntas por pagina
            <select wire:model="perpageP" name="pages" class="form-control">
{{--                <option>5</option>--}}
                <option>10</option>
                <option>50</option>
                <option>50</option>
                <option>250</option>
            </select></label>
        </div>
        <div class="col">
            <input wire:model="searchP" class="form-control" type="text" placeholder="Buscar Preguntas">
        </div>
    </div>

    <div class="row">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
            <tr>
                <th>
                    <a wire:click.prevent="sortByp('nombre')" role="button" href="#">
                        Pregunta
{{--                        @include('admin._sort-icon', ['field' => 'name'])--}}
                    </a></th>
                <th><a wire:click.prevent="sortByp('Peso')" role="button" href="#">Peso</a></th>
                <th><a role="button" href="">Promedio</a></th>
                <th><a role="button" href="">Factor interno</a></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($preguntas as $pre)
                <tr>
                    <td>{{ $pre->nombre }}</td>
                    <td>{{ $pre->peso}}%</td>
                    <td>{{ number_format($promedios[$pre->id],2) }}</td>
{{--                    <td>{{ $pre->factor_interno_id}}</td>--}}
                    <td>{{ $nombres_FI[($pre->id)]}}</td>
{{--                    @if($contact->created_at) <td>{{ $contact->created_at->format('d-m-Y') }}</td>@endif--}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col text-right text-muted">
            Mostrando {{ $preguntas->firstItem() }} - {{ $preguntas->lastItem() }} de {{ $preguntas->total() }} resultados
        </div>
        <div class="col">
{{--            {{$preguntas->links()}}--}}
        </div>
    </div>
    @else
        <strong>No existen respuestas para este sector economico</strong>
    @endif
</div>
