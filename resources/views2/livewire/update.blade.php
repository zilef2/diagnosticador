{{--<div class="form-group">--}}
<form class="form-group">
    <div class="form-group mb-md-5 px-3">
    <input type="hidden" wire:model="selected_id">

    <label for="nombre">Por favor, Corrija la pregunta</label>
    <input class="form-control" wire:model="nombre" type="text" name="nombre" ><br>
    <button wire:click="update()" class="btn btn-outline-success">Actualizar Pregunta</button>
    </div>
</form>
