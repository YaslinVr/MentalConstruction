@extends('layouts.master')

@section('title-page', 'El Estres')

@section('message')
@include('layouts._my_message')
@include('layouts._my_error')
@endsection

@section('content')
 <section class="about">
                <h1 class="title">Es hora de descansar</h1>
                <h3 class="parrafo">¿Cómo te gustaría relajarte?</h3>

                <div class="about_main">
                    <article class="about_icons">
                        <img src="./images/cuento_caperucita.png" class="about_icon">
                        <h3 class="about_sub">Caperucita Roja</h3>
                        <p class="about_parrafo">18 Minutos</p>
                            <a href="/caperucita" class="cta">Ir.</a>
                    </article>
                    <article class="about_icons">
                        <img src="./images/cuento_cenicienta.png" class="about_icon">
                        <h3 class="about_sub">La Cenicienta</h3>
                        <p class="about_parrafo">20 Minutos</p>
                            <a href="/cenicienta" class="cta">Ir.</a>
                    </article>
                    <article class="about_icons">
                        <img src="./images/cuento_pinocho.webp" class="about_icon">
                        <h3 class="about_sub">Pinocho</h3>
                        <p class="about_parrafo">15 Minutos</p>
                            <a href="/pinocho" class="cta">Ir.</a>
                    </article>
                </div>
            </section>
           
            <section class="nosotros">
                <div class="nosotros_container container">
                    <div class="nosotros_text">
                        <h2 class="subtitulo">¿Cómo te ayuda Mental Construction a mejorar tu salud mental?</h2>
                        <p class="nosotros_parrafo">
                            En Mental Construction es un lugar para tu relajación, sanación y tranquilidad.
                            Esta app te ofrece una lista de actividades que puedes seguir para llevar una vida 
                            más amena y feliz.
                            Tu salud mental importa.
                        </p>
                        <a href="#" class="cta">Conoce los beneficios de las apps de salud mental</a>
                    </div>
                    <figure class="nosotros_imagen">
                        <img src="./images/salud mental dos.png" class="nosotros_img">
                    </figure>
                </div>
            </section>

@endsection