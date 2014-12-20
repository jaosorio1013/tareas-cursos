@extends('layout')

@section('content')
    <div class="container">
        <h1>Crear tarea</h1>

        @if(isset($msg))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif

        {{ Form::open(['route' => ['admin_crear_tarea'], 'method' => 'POST', 'role' => 'form', 'novalidate']) }}

        <div class="form-group">
            <label for="">Prioridad</label>
            {{ Form::text('prioridad', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            <label for="">Titulo</label>
            {{ Form::text('titulo', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            <label for="">Curso</label>
            {{ Form::text('curso', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            <label for="">Horas esperado</label>
            {{ Form::text('horas_esperadas', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            <label for="">Sprint</label>
            {{ Form::text('sprint', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Crear tarea"/>
        </div>
        {{ Form::close() }}

        <p>
            <a href="{{ route('tareas') }}">Ver tareas</a>
        </p>
    </div>
@stop