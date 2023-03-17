@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Seleccione el usuario a modificar<br>
                        <small>Solo aparecen los usuarios que no sean super administradores</small>
                        <br>
                    </div>
                    <br/>
                    <div class="row justify-content-md-center">
                        <div class="form-row">
                            @if (session('mensaje'))
                                <div class="form-group col-md-12">
                                    <div class="alert alert-success">
                                        {{ session('mensaje') }}
                                    </div>
                                </div>
                            @endif
                            <div class="form-group col-md-12 center-block mx-auto">
                                @livewire('superadmin', ['users'=>$users,'users_admin'=>$users_admin])
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection

