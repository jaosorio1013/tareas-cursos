@extends('layout')


@section('content')
    <div class="container">
        <h1>Listado actividades</h1>

        <p>
            <a href="{{ route('crear_actividad', $tarea->id) }}">Crear actividad</a>
        </p>

        <p>
            <a href="#" onclick="volver()">Volver</a>
        </p>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Equipo</th>
                <th>Quíen</th>
                <th>Cuando</th>
                <th>Cuanto</th>
                <th>Estado</th>
                <th>Editar</th>
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
                    <td><a href="{{ route('actualizar_actividad', $actividad->id) }}">Editar</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop