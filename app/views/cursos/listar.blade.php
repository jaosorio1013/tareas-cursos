@extends('layout')


@section('content')
    <div class="container">
        <h1>Listado cursos</h1>

        <p>
            <a href="{{ route('crear_curso') }}">Crear curso</a>
        </p>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Editar</th>
                <th>Tareas</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cursos AS $curso)
                <tr>
                    <td>{{ $curso->nombre }}</td>
                    <td><a href="{{ route('actualizar_curso', $curso->id) }}">Editar</a></td>
                    <td><a href="{{ route('tareas_curso', $curso->id) }}">Tareas</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop