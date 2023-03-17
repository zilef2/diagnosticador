<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
{{--                @dd($FCE)--}}
                <form action="{{ route('respuestaf') }}" method="post">
                    @method('PUT') @csrf
                    <input type="hidden" name="userid" value="{{Auth::user()->id}}">
                    @foreach($FCE as $fces)
                        <h1 align="center">{{$fces->nombre}}</h1>
                        @foreach($FI as $fis)
                        @if($fis->factor_clave_exito_id==$fces->id)
{{--                            @if($fis->factor_clave_exito_id==$fces->id)--}}
                                <div class="card-header"><b>{{$fis->nombre}}</b></div>
                            @forelse ($preguntas as $item)
                                @if($item->factor_interno_id==$fis->id)
{{--                                        str_word_count--}}
                                <div class="card-body">
                                    <div class="form-row justify-content-md-center">
                                        <p>{{$loop->iteration}}.{{$item->nombre}}</p></br>
                                    </div>
                                    <div class="form-row justify-content-md-center">
                                        <div class="col-md-3">
                                            <input type="hidden" name="pregunta_id[]" value={{$item->id}}>
                                            <input type="number" name="pregunta[]"
                                                   placeholder="min 0, max 40" min=0 max=40 class="form-control" required/>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                @endif
                            @empty
                                No hay preguntas que mostrar
                            @endforelse
                        @endif
                    @endforeach
                @endforeach
                <button class="btn btn-primary btn-block" type="submit">Enviar respuestas</button>
                </form>

            </div>
        </div>
    </div>
</div>
{{--<div class="row justify-content-center">--}}
{{--    {{ $FCE->links() }}--}}
{{--</div>--}}

