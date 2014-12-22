@extends('layout')

@section('content')
    <div class="container">
        <h1>Actualizar tarea ({{ $tarea->titulo }})</h1>

        @if(isset($msg))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif

        {{ Form::model($tarea, ['route' => ['actualizar_tarea', $tarea->id], 'method' => 'PUT', 'role' => 'form', 'novalidate']) }}

        @include('tareas/formulario')

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Actualizar tarea"/>
            <a href="{{ route('crear_tarea') }}" class="btn btn-info">Nueva tarea</a>
        </div>
        {{ Form::close() }}

        <p>
            <a href="{{ route('tareas', $tarea->sprint->id) }}" class="btn btn-default">Ver tareas</a>
        </p>
    </div>
@stop