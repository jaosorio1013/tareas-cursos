@extends('layout')


@section('content')
    <div class="container">
        <h1>Listado cursos</h1>

        <p>
            <a href="{{ route('crear_sprint', [$idTarea]) }}">Crear curso</a>
        </p>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Editar</th>
                <th>Sprints</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sprints AS $sprint)
                <tr>
                    <td>{{ $curso->nombre}}</td>
                    <td><a href="{{ route('actualizar_curso', $curso->id) }}">Editar</a></td>
                    <td><a href="{{ route('sprints', $curso->id) }}">Sprints</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop