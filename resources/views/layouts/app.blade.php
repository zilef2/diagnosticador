<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token --><meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Nombre_app') }}</title>
    <!-- Scripts --><script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    <link href="/fontawesome/css/all.css" rel="stylesheet">

    @yield('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <img src="{{ url('/images/logito.png') }}" height="60px" alt="no Icono">
                <a class="navbar-brand ml-2" href="{{ url('/home') }}">
                    {{ config('app.name', 'Nombre_app') }}
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            @include('navigations.'. \App\User::navigation())
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @yield('head_scripts')

    @livewireScripts

    <script>
        let inputElements = document.getElementsByName('FI_peso');
        let resultado = document.getElementById('resultado');

        console.log("🚀🧈 -----------------------------------------------------🚀🧈");
        console.log("🚀🧈 debuging inputElements:", inputElements);
        console.log("🚀🧈 -----------------------------------------------------🚀🧈");
        // if(inputElements.length != 0) {
            inputElements.forEach(element => {
                element.addEventListener('click', ()=> {
                    var total = 0;
                        console.log("element:", element);
                        inputElements.forEach(sumando => {
                            if(!isNaN(sumando.value)) total += parseFloat(sumando.value);
                        });
                        resultado.textContent = total;
                    })
               
            });
            resultado.value = 'no hay valores';
        // }
    </script>



    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
