<div class="form-group">
    <label for="">Prioridad</label>
    {{ Form::text('prioridad', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    <label for="">Esfuerzo</label>
    {{ Form::select('esfuerzo', $esfuerzo, null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    <label for="">Titulo</label>
    {{ Form::text('titulo', null, array('class' => 'form-control')) }}
</div>

{{--<div class="form-group">
    <label for="">Curso</label>
    {{ Form::text('curso', null, array('class' => 'form-control')) }}
</div>--}}

<div class="form-group">
    <label for="">Horas esperado</label>
    {{ Form::text('horas_esperadas', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    <label for="">Tiempo locucion</label>
    {{ Form::text('tiempo_locucion', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    <label for="">Tiempo real</label>
    {{ Form::text('tiempo_real', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    <label for="">Sprint</label>
    {{ Form::select('sprint_id', $sprints, null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    <label for="">Curso</label>
    {{ Form::select('curso_id', $cursos, null, array('class' => 'form-control')) }}
</div>