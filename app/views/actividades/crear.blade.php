@extends('layout')


@section('content')
    <div class="container">
        <h1>Crear actividad ({{ $tarea->titulo }})</h1>

        {{ Form::open(['route' => ['crear_actividad', $tarea->id], 'method' => 'POST', 'role' => 'form', 'novalidate']) }}

        @include('actividades/formulario')

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Crear actividad"/>
        </div>
        {{ Form::close() }}


        <p>
            <a href="#" onclick="volver()" class="btn btn-danger">Volver</a>
            <a href="{{ route('tareas') }}" class="btn btn-default">Ver tareas</a>
        </p>
    </div>
@stop