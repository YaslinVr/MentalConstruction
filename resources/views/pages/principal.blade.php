@extends('layouts.master')

@section('title-page', 'El Estres')

@section('message')
@include('layouts._my_message')
@include('layouts._my_error')
@endsection

@section('content')
<div class="hero_container">
      <h1 class="hero_title">El Plan de Hoy:</h1>

      <ul class="checklist">
          <li class="checklist-item">
              <input type="checkbox" id="meditacion">
              <label for="meditacion">6 AM: Meditación para iniciar el día </label>
          </li><br>
          <li class="checklist-item">
              <input type="checkbox" id="terapias">
              <label for="terapias">10 AM: Revisa tu calendario de terapias </label>
          </li><br>
          <li class="checklist-item">
              <input type="checkbox" id="descanso">
              <label for="descanso">4 PM: Toma un descanso </label>
          </li><br>
          <li class="checklist-item">
              <input type="checkbox" id="respiracion">
              <label for="respiracion">8 PM: Ejercicio de respiración </label>
          </li><br>
          <li class="checklist-item">
              <input type="checkbox" id="dormir">
              <label for="dormir">10 PM: Hora de dormir</label>
          </li><br>
      </ul>
  </div>
@endsection