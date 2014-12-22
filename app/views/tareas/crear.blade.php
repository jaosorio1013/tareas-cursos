@extends('layout')

@section('content')
    <div class="container">
        <h1>Crear tarea</h1>

        @if(isset($msg))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif

        {{ Form::open(['route' => ['crear_tarea'], 'method' => 'POST', 'role' => 'form', 'novalidate']) }}

        @include('tareas/formulario')

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Crear tarea"/>
        </div>
        {{ Form::close() }}

        <p>
            <a href="{{ route('tareas', $sprint->id) }}">Ver tareas</a>
        </p>
    </div>
@stop