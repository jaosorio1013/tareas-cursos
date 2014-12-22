@extends('layout')


@section('content')
    <div class="container">
        <h1>Listado de sprints</h1>


        <table class="table table-striped">
            <thead>
            <tr>
                <th>Número</th>
                <th>Fecha inicio</th>
                <th>Fecha final</th>
                <th>Ver tareas</th>
                <th>Crear tarea</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sprints AS $sprint)
                <tr>
                    <td><a href="{{ route('admin_actualizar_tarea', [$sprint->id]) }}">{{ $sprint->numero }}</a></td>
                    <td>{{ $sprint->fecha_inicial }}</td>
                    <td>{{ $sprint->fecha_final }}</td>
                    <td><a href="@{{ route('ver_tareas_sprint', [$tarea->id]) }}">Ver tareas</a></td>
                    <td><a href="@{{ route('crear_tarea_sprint', [$tarea->id]) }}">Crear tarea</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop