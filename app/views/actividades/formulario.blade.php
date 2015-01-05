<div class="form-group">
    <label for="">Equipo</label>
    {{ Form::select('equipo', ['1' => '1', '2' => '2', '3' => '3'], null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    <label for="">Quíen</label>
    {{ Form::select('quien', ['Victor' => 'Victor', 'Sandra' => 'Sandra',
        'Silvana' => 'Silvana', 'Jeff' => 'Jeff', 'Catalina' => 'Catalina',
         'Cristian' => 'Cristian', 'Sebastian' => 'Sebastian', 'Israel' => 'Israel',
         'Gustabo' => 'Gustabo', 'Jhonatan' => 'Jhonatan', 'Julio' => 'Julio',],
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
        'Programando' => 'Programando', 'Correcciones' => 'Correcciones',
        'Finalización' => 'Finalización', 'Aprobado' => 'Aprobado', 'Subido' => 'Subido'],
        null, array('class' => 'form-control')) }}
</div>