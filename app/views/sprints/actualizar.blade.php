@extends('layout')

@section('content')
    <div class="container">
        <h1>Actualizar sprint ({{ $sprint->curso->nombre }} # {{ $sprint->numero }})</h1>

        @if(isset($msg))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif

        {{ Form::model($sprint, ['route' => ['actualizar_sprint', $sprint->id], 'method' => 'PUT', 'role' => 'form', 'novalidate']) }}

        @include('sprints/formulario')

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Actualizar actividad"/>
            <a href="{{ route('crear_actividad', $sprint->curso->id) }}" class="btn btn-info">Nueva actividad</a>
        </div>
        {{ Form::close() }}

        <p>
            <a href="{{ route('sprints_curso', $sprint->curso->id) }}" class="btn btn-danger">Volver</a>
            <a href="{{ route('cursos') }}" class="btn btn-default">Ver cursos</a>
        </p>
    </div>
@stop