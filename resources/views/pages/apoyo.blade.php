@extends('layouts.master')

@section('title-page', 'El Estres')

@section('message')
@include('layouts._my_message')
@include('layouts._my_error')
@endsection

@section('content')
<h1>CONECTA CON AMIGOS</h1><br><br> 
<div id="chat-container">
    <div>
        <h3> BANDEJA DE MENSAJE</h3>
    </div>
   <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Escribe tu mensaje</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe tu mensaje">
    <small id="emailHelp" class="form-text text-muted">nunca compartiremostt u informacion.</small>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>


@endsection