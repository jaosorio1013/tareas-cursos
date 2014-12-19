<h1>Crear actividad</h1>

{{ Form::open(['route' => ['crear_actividad', $idTarea], 'method' => 'POST', 'role' => 'form', 'novalidate']) }}
    <p>
        <label for="">Equipo</label>
        <select name="equipo" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </p>

    <p>
        <label for="">Quíen</label>
        <select name="quien" id="">
            <option value="Victor">Victor</option>
            <option value="Sandra">Sandra</option>
            <option value="Diego">Diego</option>
            <option value="Silvana">Silvana</option>
            <option value="Jeff">Jeff</option>
        </select>
    </p>

    <p>
        <label for="">Cuando</label>
        <input type="text" name="cuando"/>
    </p>

    <p>
        <label for="">Cuanto</label>
        <input type="text" name="cuanto"/>
    </p>

    <p>
        <label for="">Estado</label>
        <select name="estado" id="">
            <option value="Sin iniciar">Sin iniciar</option>
            <option value="Investigación">Investigación</option>
            <option value="Guión">Guión</option>
            <option value="Grabación">Grabación</option>
            <option value="Edición">Edición</option>
            <option value="Correcciones">Correcciones</option>
            <option value="Finalización">Finalización</option>
        </select>
    </p>

    <p>
        <input type="submit" value="Crear actividad"/>
    </p>
{{ Form::close() }}


<p>
    <a href="{{ route('tareas') }}">Ver tareas</a>
</p>