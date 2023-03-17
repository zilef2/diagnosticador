@if(isset($users))
<table>
    <thead>
        <tr><th>USUARIOS</th></tr>
    </thead>
    <tbody>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>empresa</th>
        <th>cargo</th>
        <th>activo</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->empresa }}</td>
            <td>{{ $user->cargo }}</td>
            <td>{{ $user->activo }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endif

@if(isset($preguntas))
    <table>
    <thead>
    <tr><th>PREGUNTAS</th></tr>
    </thead>
    <tbody>
    <tr>
        <th>id</th>
        <th>nombre</th>
        <th>peso</th>
        <th>sector_economico_id</th>
        <th>factor_interno_id</th>
    </tr>
    @foreach($preguntas as $preg)
        <tr>
            <td>{{ $preg->id }}</td>
            <td>{{ $preg->nombre }}</td>
            <td>{{ $preg->peso }}</td>
            <td>{{ $preg->sector_economico_id }}</td>
            <td>{{ $preg->factor_interno_id }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endif

@if(isset($factor_clave_exito))
<table>
    <thead>
            <tr><th>FCE</th></tr>

    </thead>
    <tbody>
    <tr>
        <th>id</th>
        <th>nombre</th>
    </tr>
    @foreach($factor_clave_exito as $FCE)
        <tr>
            <td>{{ $FCE->id }}</td>
            <td>{{ $FCE->nombre }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endif

@if(isset($factor_interno))
<table>
    <thead>
            <tr><th>FI</th></tr>

    </thead>
    <tbody>
    <tr>
        <th>id</th>
        <th>nombre</th>
        <th>peso</th>
        <th>factor_clave_exito_id</th>
    </tr>
    @foreach($factor_interno as $FI)
        <tr>
            <td>{{ $FI->id }}</td>
            <td>{{ $FI->nombre }}</td>
            <td>{{ $FI->peso }}</td>
            <td>{{ $FI->factor_clave_exito_id }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endif

{{----}}
@if(isset($Sector_economico))
<table>
    <thead>
            <tr><th>Sector_economico</th></tr>

    </thead>
    <tbody>
    <tr>
        <th>id</th>
        <th>nombre</th>
    </tr>
    @foreach($Sector_economico as $FI)
        <tr>
            <td>{{ $FI->id }}</td>
            <td>{{ $FI->nombre }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endif

@if(isset($Respuestas))
<table>
    <thead>
            <tr><th>Respuestas</th></tr>

    </thead>
    <tbody>
    <tr>
        <th>id</th>
        <th>user_id</th>
        <th>pregunta_id</th>
        <th>value</th>
    </tr>
    @foreach($Respuestas as $FI)
        <tr>
            <td>{{ $FI->id }}</td>
            <td>{{ $FI->user_id }}</td>
            <td>{{ $FI->pregunta_id }}</td>
            <td>{{ $FI->value }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endif
