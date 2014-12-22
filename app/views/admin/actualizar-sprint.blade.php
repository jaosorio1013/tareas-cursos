@extends('layout')

@section('content')
    <div class="container">
        <h1>Actualizar sprint ({{ $sprint->numero }})</h1>

        @if(isset($msg))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif

        {{ Form::model($sprint, ['route' => ['admin_actualizar_sprint', $idSprint], 'method' => 'PUT', 'role' => 'form', 'novalidate']) }}

        @include('admin/formulario-sprint')

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Actualizar tarea"/>
            <a href="{{ route('admin_formulario_crear_sprint') }}" class="btn btn-info">Nuevo sprint</a>
        </div>
        {{ Form::close() }}

        <p>
            <a href="{{ route('sprints') }}">Ver sprints</a>
        </p>
    </div>
@stop