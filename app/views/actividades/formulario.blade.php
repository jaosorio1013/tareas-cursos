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
    <label for="">Cuando</label>
    <div class="input-append date">
        <div class="input-group date form_datetime">
            {{ Form::text('cuando', null, array('class' => 'form-control datepicker', 'readonly' => '')) }}
            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
        </div>
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