<div>
<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>
@if(count($users) > 0)
    <select wire:model="id_u" id="Super_admin" class="form-control mb-1 " name="Super_admin" required>
        <option value=''>Elija un usuario</option>
        @foreach($users as $use)
            <option value="{{$use->id}}"> {{$use->name}} </option>
        @endforeach
        <option value=''></option>
        <option value=''>Administradores ↓ ↓</option>
        @foreach($users_admin as $use)
            <option value="{{$use->id}}"> {{$use->name}} </option>
        @endforeach
    </select><hr>
    @if($id_u)
        <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Advertencia</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Esta seguro que desea darle permisos de Super administrador a este usuario?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" wire:click="Scambiar()">Conceder permisos</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Mejor no</button>
                    </div>
                </div>
            </div>
        </div>
        <a wire:click="cambiar()" class="btn btn-primary rounded">Administrador</a>
        <button class="btn btn-danger rounded" type="button" data-toggle="modal" data-target="#exampleModal">Super administrador</button>
    @else
        <small>Verifique el nombre del usuario antes de otorgar permisos</small>
    @endif
@else
    <b>No hay usuarios o usuarios administradores actualmente</b>
@endif
</div>
