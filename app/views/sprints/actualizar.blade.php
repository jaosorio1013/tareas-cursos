@extends('layout')

@section('content')
    <div class="container">
        <h1>Actualizar sprint # {{ $sprint->numero }}</h1>

        @if(isset($msg))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif

        {{ Form::model($sprint, ['route' => ['actualizar_sprint', $sprint->id], 'method' => 'PUT', 'role' => 'form', 'novalidate']) }}

        @include('sprints/formulario')

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Actualizar actividad"/>
            <a href="{{ route('crear_sprint') }}" class="btn btn-info">Nuevo sprint</a>
        </div>
        {{ Form::close() }}

        <p>
            <a href="{{ URL::previous() }}" class="btn btn-danger">Volver</a>
        </p>
    </div>
@stop