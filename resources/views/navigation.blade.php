@section('content')
<header>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="{{ url('/')}}" class="navbar-brand">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                {{--            <li class="nav-item">--}}
                {{--              <a class="nav-link disabled" href="#">Disabled</a>--}}
                {{--            </li>--}}

            </ul>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __("Selecciona un idioma")}}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown06">
                        <a href="">asd</a>
{{--                        <a href="{{ route('set_language', ['es']) }}"  class="dropdown-item">{{ __("Español")}}</a>--}}
{{--                        <a href="{{ route('set_language', ['en']) }}"  class="dropdown-item">{{ __("Ingles")}}</a>--}}
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
