@extends('layouts.app')
@section('content')
<div class="container"><div class="row justify-content-center"><div class="col-lg-8">
    <form action="{{ route('Agregar_item4')}}" method="POST">
    @method('PUT') @csrf
        @if (isset($message2))
            <div class="alert alert-danger">
                <li>{{$message2}}</li>
            </div>
        @endif

        @for($i=0;$i<count($num_FI);$i++)
        <h3>{{$FCE[$i]}}</h3>
            @for($j=0;$j<$num_FI[$i];$j++)
                <label for="FCE">Digite el nuevo Factor Interno #{{$j+1}} con su respectivo peso</label>
                <input type="text" name="FI_nombre[]" placeholder="nuevo Factor Interno" class="form-control mb-2 col-md-8" required/>
{{--                @if($num_FI[$i]==1)--}}
{{--                    <input type="number" name="FI_peso[]" value="100" class="form-control mb-2 col-md-4" disabled required/>--}}
{{--                @else--}}
                    <input type="number" name="FI_peso[]" placeholder="Peso 1-100" min=1 max=100 class="form-control mb-2 col-md-4" required/>
{{--                @endif--}}

                <label for="FCE">Digite el numero de preguntas que tendrá dicho Factor Interno</label>
                <input type="number" name="num_preguntas[]" max=40 placeholder="" class="form-control mb-2 col-md-2" required/>
            @endfor
        @endfor
        @if (isset($message2))
            <div class="alert alert-danger">
                <li>{{$message2}}</li>
            </div>
        @endif
        <button class="btn btn-success btn-block" type="submit">Siguiente</button>
    </form>
    <hr>
    <a class="btn btn-dark btn-block" href="{{ route('home') }}">Volver</a>
</div></div></div>
@endsection
