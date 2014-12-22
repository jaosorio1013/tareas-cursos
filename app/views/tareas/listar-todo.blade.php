@extends('layout')


@section('content')
    <div class="container">
        <h1>Listado completo tareas</h1>

        @include('tareas/tabla-listado')
    </div>
@stop