@extends('layout')


@section('content')
    <div class="container">
        <h1>Asignar tareas al Curso ({{ $curso->nombre }})</h1>

        {{ Form::open(['route' => ['asignar_tareas_curso', $curso->id], 'method' => 'PUT', 'role' => 'form', 'novalidate']) }}
        <table class="table table-striped">
            <thead>
            <tr>
                <th>*</th>
                <th>Prioridad</th>
                <th>Titulo</th>
                <th>Curso</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tareas AS $tarea)
                <tr>
                    <td>{{ Form::checkbox('tarea_id[]', $tarea->id) }}</td>
                    <td>{{ $tarea->prioridad }}</td>
                    <td><a href="{{ route('actualizar_tarea', [$tarea->id]) }}">{{ $tarea->titulo }}</a></td>
                    <td>{{ $tarea->curso->nombre }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Crear tarea"/>
        </div>
        {{ Form::close() }}
    </div>
@stop