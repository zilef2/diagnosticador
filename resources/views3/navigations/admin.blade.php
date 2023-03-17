@if(Auth::user()->is_admin==2)
    <a class="nav-link" href="{{ route('Superadmin') }}">{{ __('Permisos') }}</a>
@endif

<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
@include('navigations.logged')
