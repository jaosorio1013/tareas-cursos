@extends('layout')

@section('content')
    <div class="container">
        <h1>Actualizar curso ({{ $curso->nombre }})</h1>

        @if(isset($msg))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif

        {{ Form::model($curso, ['route' => ['actualizar_curso', $curso->id], 'method' => 'PUT', 'role' => 'form', 'novalidate']) }}

        @include('cursos/formulario')

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Actualizar actividad"/>
            <a href="{{ route('crear_curso', $curso->id) }}" class="btn btn-info">Nuevo curso</a>
        </div>
        {{ Form::close() }}

        <p>
            <a href="{{ URL::previous() }}" class="btn btn-danger">Volver</a>
        </p>
    </div>
@stop