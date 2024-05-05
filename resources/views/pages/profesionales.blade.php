@extends('layouts.master')

@section('title-page', 'El Estres')

@section('message')
@include('layouts._my_message')
@include('layouts._my_error')
@endsection

@section('content')
<div class="contenedor-horizontal" id="millerDiv">
                <div class="fotoCircular  img">
                    <img src="images/miller.jpg" alt="usuario1">
                </div>
                <div class="informacion">
                    <h2>Miller Arias</h2><br>
                    <h3>Especialidad: Psicologo</h3><br>
                    <a href="http://wa.me?text=Agenda tu Cita/584125274011" target="_blank" class="button btn btn-success" role="button">Agendar Cita</a>
                </div>
            </div>    

            <br><br>

           <div class="contenedor-horizontal">
            <div class="fotoCircular1  img">
                <img src="images/yaslin.jpg" alt="usuario2">
            </div>
            <div class="informacion">
                <h2>Yaslin Vreugdenhil</h2><br>
                <h3>Especialidad: Terapeuta</h3><br>
                <a href="http://wa.me?text=Agenda tu Cita/584129008987" target="_blank" class="button btn btn-success" role="button">Agendar Cita</a>
            </div>
        </div> 

          <br><br>
           
        <div class="contenedor-horizontal">
         <div class="fotoCircular  img">
             <img src="images/isibet.jpg" alt="Foto Ejemplo">
         </div>
         <div class="informacion">
             <h2>Isivet Montero</h2><br>
             <h3>Especialidad: Psicologo</h3><br>
             <a href="http://wa.me?text=Agenda tu Cita/584245666793" target="_blank" class="button btn btn-success" role="button">Agendar Cita</a>
         </div>
     </div>
            
        <br><br>  
           
        <div class="contenedor-horizontal">
         <div class="fotoCircular1  img">
             <img src="images/juan.jpg" alt="Foto Ejemplo">
         </div>
         <div class="informacion">
             <h2>Juan Fonseca</h2><br>
             <h3>Especialidad: Psicologo</h3><br>
             <a href="http://wa.me?text=Agenda tu Cita/584245019975" target="_blank" class="button btn btn-success" role="button">Agendar Cita</a>
         </div>

     </div>

     <hr> <br>
           
            
           <div class="contenedor-mensajes">
            <h2>Mensajes</h2><br>
            <div id="mensajes-lista">
            </div>
            <form id="formulario-mensaje">
                <input type="text" id="nombre-usuario" placeholder="Nombre">
                <textarea class="texto-mensaje" id="texto-mensaje" placeholder="Escribe tu mensaje"></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>

                    <!-- CITAS -->
                    <dialog class="popup" id="agendar_Cita">
                        <div class="container">
                            <button class="button-small btn-red btn-x" type="button" id="cerrarAgendarCita">X</button>
                            <h3 for="pregunta">¿Quieres agendar una cita?</h3><br>
                            <form action="#">
                                <!-- <a href="citas.html"><button class="btn-amarillo" id="botonSi">Si</button></a>  -->
                                <a href="citas.html" class="btn-profesional_si" id="botonSi">Sí</a>
                                
                            </form>
                        </div>
                    </dialog>
@endsection