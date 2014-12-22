@extends('layout')

@section('content')
    <div class="container">
        <h1>Crear sprint</h1>

        @if(isset($msg))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif

        {{ Form::open(['route' => ['admin_crear_sprint'], 'method' => 'POST', 'role' => 'form', 'novalidate']) }}

        @include('sprints.formulario')

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Crear sprint"/>
        </div>
        {{ Form::close() }}

        <p>
            <a href="{{ route('sprints') }}">Ver sprints</a>
        </p>
    </div>
@stop