<div class="form-group">
    <label for="">Número</label>
    {{ Form::text('numero', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    <label for="">Fecha inicio</label>
    {{ Form::text('fecha_inicio', null, array('data-format' => 'yyyy/MM/dd hh:mm:ss', 'class' => 'form-control datepicker',)) }}
</div>

<div class="form-group">
    <label for="">Fecha final</label>
    {{ Form::text('fecha_final', null, array('data-format' => 'yyyy/MM/dd hh:mm:ss', 'class' => 'form-control datepicker',)) }}
</div>