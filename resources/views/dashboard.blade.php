@extends('layouts.master')

@section('title-page', 'Home')

@section('message')
@include('layouts._my_message')
@include('layouts._my_error')
@endsection

@section('content')

     <div class="contenedor-horizontal" id="millerDiv">
        <div class="fotoCircular  img">
            <img src="images/usuario.svg" alt="usuario1">
        </div>
        <div class="informacion">
            <h4> Bienvenido al Sistema </h4><br>
            <h5>Nombre: {{ auth()->user()->name  }}</h5><br>
            <h5>Email: {{ auth()->user()->email  }}</h5><br> 
             @if (count($result) === 1)
                 <small>Has respondido 1 vez el cuestionario, desea volver a contestarlo?<br><br></small>
                 <a href="/cuestionario" class="button btn btn-info" role="button">Abrir Cuestionario</a>
                 <a href="/cuestionarioList" class="button btn btn-danger" role="button">Ver mi anterior respuesta</a>
            @elseif (count($result) > 1)
                <small>Has respondido {{count($result)}} veces el cuestionario<br><br></small>
                <a href="/cuestionario" class="button btn btn-info" role="button">Abrir Cuestionario</a>
                <a href="/cuestionarioList" class="button btn btn-danger" role="button">Ver mi anterior respuesta</a>
            @else
            <small>Para obtener una experiencia mas personalizada por favor complete nuestro cuestionario inicial:</small><br><br>
             <a href="/cuestionario" class="button btn btn-info" role="button">Abrir Cuestionario Inicial</a>
            @endif

        </div>
    </div>      

@endsection