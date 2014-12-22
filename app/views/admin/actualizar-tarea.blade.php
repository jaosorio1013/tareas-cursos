@extends('layout')

@section('content')
    <div class="container">
        <h1>Actualizar tarea ({{ $tarea->titulo }})</h1>

        @if(isset($msg))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif

        {{ Form::model($tarea, ['route' => ['admin_actualizar_tarea', $idTarea], 'method' => 'PUT', 'role' => 'form', 'novalidate']) }}

        @include('admin/formulario-tareas')

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Actualizar tarea"/>
            <a href="{{ route('admin_formulario_crear_tarea') }}" class="btn btn-info">Nueva tarea</a>
        </div>
        {{ Form::close() }}

        <p>
            <a href="{{ route('tareas') }}">Ver tareas</a>
        </p>
    </div>
@stop