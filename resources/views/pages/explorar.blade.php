@extends('layouts.master')

@section('title-page', 'El Estres')

@section('message')
@include('layouts._my_message')
@include('layouts._my_error')
@endsection

@section('content')
<section class="about">
    <h1 class="title">¿Qué quieres aprender hoy?</h1>
    <h3 class="parrafo">Siempre es bueno aprender cosas nuevas.</h3>

    <div class="about_main">
        <article class="about_icons">
            <img src="./images/tiempo.webp" class="about_icon">
            <h3 class="about_sub">¿Cuan estresado estás?</h3>
            <p class="about_parrafo">El estrés afecta tanto a la mente como al cuerpo. Es positivo tener un poco, pues nos ayuda 
                a realizar las actividades diarias, pero cuando el estrés pasa a ser excesivo tiene consecuencias físicas y psíquicas.</p>
                <a href="/estres" class="cta">Leer más.</a>
        </article>
        <article class="about_icons">
            <img src="./images/musica.png" class="about_icon">
            <h3 class="about_sub">Ventajas de escuchar música para la mente.</h3>
            <p class="about_parrafo">La investigación moderna apoya la sabiduría 
                convencional de que la música beneficia el estado de ánimo y la confianza.</p>
                <a href="/musica" class="cta">Leer más.</a>
        </article>
        <article class="about_icons">
            <img src="./images/pulmones.webp" class="about_icon">
            <h3 class="about_sub">Conoce los beneficios de los Ejercicios de Respiración</h3>
            <p class="about_parrafo">Los ejercicios de respiración pueden tener una serie de beneficios, incluyendo la mejora de la salud respiratoria, 
                la reducción del estrés y la ansiedad, y el fortalecimiento de los músculos respiratorios. </p>
                <a href="/ejercicios" class="cta">Leer más.</a>
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