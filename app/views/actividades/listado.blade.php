<h1>Listado actividades</h1>

<p>
    <a href="{{ route('formulario_actividad', [$idTarea]) }}">Crear actividad</a>
</p>

<p>
    <a href="{{ route('tareas') }}">Volver</a>
</p>

<table border="1">
    <thead>
        <tr>
            <th>Equipo</th>
            <th>Quíen</th>
            <th>Cuando</th>
            <th>Cuanto</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
    @foreach($actividades AS $actividad)
        <tr>
            <td>{{ $actividad->equipo }}</td>
            <td>{{ $actividad->quien }}</td>
            <td>{{ $actividad->cuando }}</td>
            <td>{{ $actividad->cuanto }}</td>
            <td>{{ $actividad->estado }}</td>
        </tr>
    @endforeach
    </tbody>
</table>