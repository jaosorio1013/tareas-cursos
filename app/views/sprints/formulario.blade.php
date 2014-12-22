<div class="form-group">
    <label for="">Número</label>
    {{ Form::text('numero', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    <label for="">Fecha inicial</label>
    <div class="input-append date">
        <div class="input-group date form_datetime">
            {{ Form::text('fecha_inicio', null, array('class' => 'form-control datepicker', 'readonly' => '')) }}
            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="">Fecha final</label>
    <div class="input-append date">
        <div class="input-group date form_datetime">
            {{ Form::text('fecha_final', null, array('class' => 'form-control datepicker', 'readonly' => '')) }}
            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="">Estado</label>
    {{ Form::select('estado', $cursos, null, array('class' => 'form-control')) }}
</div>