<h1>Crear tarea</h1>

@if(isset($msg))
    <h2>{{ $msg }}</h2>
@endif

{{ Form::open(['route' => ['admin_crear_tarea'], 'method' => 'POST', 'role' => 'form', 'novalidate']) }}
<p>
    <label for="">Prioridad</label>
    <input type="text" name="prioridad"/>
</p>

<p>
    <label for="">Titulo</label>
    <input type="text" name="titulo"/>
</p>

<p>
    <label for="">Curso</label>
    <input type="text" name="curso"/>
</p>

<p>
    <label for="">Horas esperado</label>
    <input type="text" name="horas_esperadas"/>
</p>

<p>
    <label for="">Sprint</label>
    <input type="text" name="sprint"/>
</p>

<p>
    <input type="submit" value="Crear tarea"/>
</p>
{{ Form::close() }}

<p>
    <a href="{{ route('tareas') }}">Ver tareas</a>
</p>