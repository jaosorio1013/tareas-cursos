<p>
    <a href="{{ route('crear_tarea') }}">Crear tarea</a>
</p>

<table class="table table-striped">
    <thead>
    <tr>
        <th>Prioridad</th>
        <th>Titulo</th>
        <th>Curso</th>
        <th>Sprint</th>
        <th>Ver actividades</th>
        <th>Crear actividad</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tareas AS $tarea)
        <tr>
            <td>{{ $tarea->prioridad }}</td>
            <td><a href="{{ route('actualizar_tarea', [$tarea->id]) }}">{{ $tarea->titulo }}</a></td>
            <td>{{ $tarea->curso->nombre }}</td>
            <td>{{ $tarea->sprint->numero }}</td>
            <td><a href="{{ route('actividades_tarea', [$tarea->id]) }}">Ver</a></td>
            <td><a href="{{ route('crear_actividad', [$tarea->id]) }}">Crear</a></td>
        </tr>
    @endforeach
    </tbody>
</table>