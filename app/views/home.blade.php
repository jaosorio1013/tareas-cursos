@extends('layout')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Tareas cocina33</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus facere maxime possimus provident quibusdam reprehenderit similique! Commodi eius facilis, fugit harum inventore laborum minima natus officia quasi qui similique ut?</p>
        </div>
    </div>

    <div class="container">
        @include('tareas/tabla-listado')
    </div>
@stop