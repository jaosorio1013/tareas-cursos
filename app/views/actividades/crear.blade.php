@extends('layout')


@section('content')
    <div class="container">
        <h1>Crear actividad</h1>

        {{ Form::open(['route' => ['crear_actividad', $idTarea], 'method' => 'POST', 'role' => 'form', 'novalidate']) }}
        <div class="form-group">
            <label for="">Equipo</label>
            {{ Form::select('equipo', ['1' => '1', '2' => '2', '3' => '3'], null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            <label for="">Quíen</label>
            {{ Form::select('quien', ['Victor' => 'Victor', 'Sandra' => 'Sandra',
                'Diego' => 'Diego', 'Silvana' => 'Silvana', 'Jeff' => 'Jeff'],
                null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            <label for="">Cuando (Ejem: 2014/12/20 12:05:10)</label>
            <div class="input-append date">
                {{--<input data-format="yyyy/MM/dd hh:mm:ss" type="text" name="cuando" class="form-control" />--}}
                {{ Form::text('cuando', null, array('data-format' => 'yyyy/MM/dd hh:mm:ss', 'class' => 'form-control datepicker',)) }}
            </div>
        </div>

        <div class="form-group">
            <label for="">Cuanto</label>
            {{ Form::text('cuanto', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            <label for="">Estado</label>
            {{ Form::select('estado', ['Sin iniciar' => 'Sin iniciar', 'Investigación' => 'Investigación',
                'Guión' => 'Guión', 'Grabación' => 'Grabación', 'Edición' => 'Edición',
                'Correcciones' => 'Correcciones', 'Finalización' => 'Finalización'],
                null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Crear actividad"/>
        </div>
        {{ Form::close() }}


        <p>
            <a href="{{ route('tareas') }}">Ver tareas</a>
        </p>
    </div>
@stop