@extends('layout')

@section('content')
    <div class="container">
        <h1>Actualizar tarea ({{ $actividad->tarea->titulo }})</h1>

        @if(isset($msg))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif

        {{ Form::model($actividad, ['route' => ['actualizar_actividad', $actividad->id], 'method' => 'PUT', 'role' => 'form', 'novalidate']) }}

        @include('actividades/formulario')

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Actualizar actividad"/>
            <a href="{{ route('crear_actividad', $actividad->tarea->id) }}" class="btn btn-info">Nueva actividad</a>
        </div>
        {{ Form::close() }}

        <p>
            <a href="#" onclick="volver()" class="btn btn-danger">Volver</a>
            <a href="{{ route('tareas') }}" class="btn btn-default">Ver tareas</a>
        </p>
    </div>
@stop