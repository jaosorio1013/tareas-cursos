<h1>Listado de tareas</h1>


<table border="1">
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
                <td>{{ $tarea->titulo }}</td>
                <td>{{ $tarea->curso }}</td>
                <td>{{ $tarea->sprint }}</td>
                <td><a href="{{ route('actividades_tarea', [$tarea->id]) }}">Ver</a></td>
                <td><a href="{{ route('formulario_actividad', [$tarea->id]) }}">Crear</a></td>
            </tr>
        @endforeach
    </tbody>
</table>