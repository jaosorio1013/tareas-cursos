@extends('layout')


@section('content')
    <div class="container">
        <h1>Crear sprint ({{ $curso->titulo }})</h1>

        {{ Form::open(['route' => ['crear_sprint', $curso->id], 'method' => 'POST', 'role' => 'form', 'novalidate']) }}

        @include('sprints/formulario')

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Crear actividad"/>
        </div>
        {{ Form::close() }}

        <p>
            <a href="{{ route('sprints_curso', $curso->id) }}" class="btn btn-danger">Volver</a>
            <a href="{{ route('cursos') }}" class="btn btn-default">Ver cursos</a>
        </p>
    </div>
@stop