<div class="container">
    <!-- Jumbotron Header -->
    <h2 class="display-4">{{config('app.name', 'Laravel')}}</h2>

    @if (isset($message))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Operacion correcta:</strong> {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
    @endif
    {{-- <h5 class="display-6">Phd Jorge Anibal Restrepo Morales</h5> --}}

    <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" height="210px" src="{{ url('/dash/reporte.jpeg') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Reporte</h4>
                    <p class="card-text">Genera una tabla con los promedios y demas factores de interes</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary btn-lg" href="{{ route('reporte2', auth::User()->id) }}"> {{ __("Reporte General") }} </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" height="200px" src="{{ url('/dash/preguntas.jpeg') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Ver Formulario</h4>
                    <p class="card-text">Aqui encontrara todas las variables que contiene el formulario de los clientes</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('Listar_preguntas') }}" class="btn btn-primary">Ver formulario</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" height="200px" src="{{ url('/dash/form.jpeg') }}" alt="">

                <div class="card-body">
                    <h4 class="card-title">Variables</h4>
                    <p class="card-text">Desea ampliar la biblioteca de variables?</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('Agregar_items', auth::User()->id) }}" class="btn btn-primary">Añadir</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" height="200px" src="{{ url('/dash/iexcel.jpeg') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Descargar Base de datos</h4>
                    <p class="card-text">Descarga la base de datos tal cual y como esta a la fecha</p>
                </div>
                <div class="card-footer">
{{--                    <a href="{{ route('export1') }}" class="btn btn-primary" disabled="disabled">Descargar Reporte</a>--}}
{{--                    <hr>--}}
                    <a href= "{{ route('export2') }}" class="btn btn-primary">Descargar Base de Datos</a>
{{--                    <hr>--}}

                </div>
            </div>
        </div>



    </div>
</div>
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Diagnosticador Empresarial 2020</p>
    </div>
</footer>
