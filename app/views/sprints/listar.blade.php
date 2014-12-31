@extends('layout')


@section('content')
    <div class="container">
        <h1>Listado sprints</h1>

        <p>
            <a href="{{ route('crear_sprint') }}">Crear sprint</a>
        </p>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Número</th>
                <th>Fecha inicio</th>
                <th>Fecha final</th>
                <th>Editar</th>
                <th>Tareas</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sprints AS $sprint)
                <tr>
                    <td>{{ $sprint->numero }}</td>
                    <td>{{ $sprint->fecha_inicio }}</td>
                    <td>{{ $sprint->fecha_final }}</td>
                    <td><a href="{{ route('actualizar_sprint', $sprint->id) }}">Editar</a></td>
                    <td>
                        <a href="{{ route('tareas_sprint', $sprint->id) }}">Lista tareas</a> |
                        <a href="{{ route('asignar_tareas_sprint', $sprint->id) }}">Asignar tareas</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop