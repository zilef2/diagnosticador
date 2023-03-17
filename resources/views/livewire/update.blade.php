{{--<div class="form-group">--}}
<form wire:submit.prevent="update" class="">
    <div class="form-group">
    <input type="hidden" wire:model="selected_id">

{{--    <label for="nombre"></label>--}}
    <input class="form-control" wire:model="nombre" type="text" name="nombre" ><br>
    <button class="btn btn-outline-success">Actualizar Pregunta</button>
    </div>
</form>
