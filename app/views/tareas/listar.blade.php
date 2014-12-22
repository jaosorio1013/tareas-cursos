@extends('layout')


@section('content')
    <div class="container">
        @if(isset($sprint))
            <h1>Listado de tareas (Sprint # {{ $sprint->numero }})</h1>
        @else
            <h1>Listado de tareas (Curso: {{ $curso->nombre }})</h1>
        @endif

        @include('tareas/tabla-listado')
    </div>
@stop