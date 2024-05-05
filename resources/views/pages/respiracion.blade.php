@extends('layouts.master')

@section('title-page', 'El Estres')

@section('message')
@include('layouts._my_message')
@include('layouts._my_error')
@endsection

@section('content')
   <section class="about">
                <h1 class="title">¿Cómo te sientes hoy?</h1>
                <h3 class="parrafo">Es hora de respirar, relajarse y tomar un tiempo para tí.</h3>

                <div class="about_main">
                    <article class="about_icons">
                        <img src="./images/ansiedad dos.png" class="about_icon">
                        <h3 class="about_sub">Ansiedad</h3>
                        <p class="about_parrafo">2 minutos</p>
                        <a href="/ansiedad" class="cta">Ir.</a>
                    </article>
                    <article class="about_icons">
                        <img src="./images//tristeza.png" class="about_icon">
                        <h3 class="about_sub">Tristeza</h3>
                        <p class="about_parrafo">2 minutos</p>
                        <a href="/tristeza" class="cta">Ir.</a>
                    </article>
                    <article class="about_icons">
                        <img src="./images/miedo dos.png" class="about_icon">
                        <h3 class="about_sub">Temor</h3>
                        <p class="about_parrafo">3 minutos</p>
                        <a href="#" class="cta">Ir.</a>
                    </article>
                    <article class="about_icons">
                        <img src="./images/enojo.png" class="about_icon">
                        <h3 class="about_sub">Enojo</h3>
                        <p class="about_parrafo">2,5 minutos</p>
                        <a href="#" class="cta">Ir.</a>
                    </article>
                    <article class="about_icons">
                        <img src="./images/estres.png" class="about_icon">
                        <h3 class="about_sub">Estrés</h3>
                        <p class="about_parrafo">2 minutos</p>
                        <a href="#" class="cta">Ir.</a>
                    </article>
                    <article class="about_icons">
                        <img src="./images/preocupacion.png" class="about_icon">
                        <h3 class="about_sub">Preocupación</h3>
                        <p class="about_parrafo">2 minutos</p>
                        <a href="#" class="cta">Ir.</a>
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

     
  </section>  
@endsection