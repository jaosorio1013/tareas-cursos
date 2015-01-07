@extends('layout')


@section('content')
    <div class="container">
        <h1>Crear sprint</h1>

        {{ Form::open(['route' => ['crear_sprint'], 'method' => 'POST', 'role' => 'form', 'novalidate']) }}

        @include('sprints/formulario')

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Crear actividad"/>
        </div>
        {{ Form::close() }}

        <p>
            <a onclick="volver()" class="btn btn-danger">Volver</a>
        </p>
    </div>
@stop