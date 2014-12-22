@extends('layout')


@section('content')
    <div class="container">
        <h1>Crear curso</h1>

        {{ Form::open(['route' => ['crear_curso'], 'method' => 'POST', 'role' => 'form', 'novalidate']) }}

        @include('cursos/formulario')

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Crear actividad"/>
        </div>
        {{ Form::close() }}

        <p>
            <a href="{{ route('cursos') }}" class="btn btn-danger">Ver cursos</a>
        </p>
    </div>
@stop