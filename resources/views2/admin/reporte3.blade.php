@extends('layouts.app')
@section('content')
    <div class="container pt-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reporte General</li>
            </ol>
        </nav>
        <livewire:counter/>
    </div>
@endsection
