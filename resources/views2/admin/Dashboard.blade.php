

<div class="container">
    <!-- Jumbotron Header -->
    <h1 class="display-2">{{config('app.name', 'Laravel')}}</h1>
    <h4 class="display-4">Phd Jorge Anibal Restrepo Morales</h4>

{{--    <header class="jumbotron my-lg-4">--}}
{{--        <p class="lead">--}}
{{--            <i class="fas fa-user"></i>--}}
{{--        </p>--}}
{{--    </header>--}}

    <!-- Page Features -->
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
                    <p class="card-text">Aqui encontrara todas las preguntas que contiene el formulario de los clientes</p>
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
                    <h4 class="card-title">Preguntas</h4>
                    <p class="card-text">Desea ampliar la biblioteca de preguntas?</p>
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
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->

