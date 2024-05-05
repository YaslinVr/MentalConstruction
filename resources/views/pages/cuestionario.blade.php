<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Bienvenida</title>
  <link rel="shortcut icon" href="./images/icono solo cut.png" type="image/x-icon">
  <link rel="stylesheet" href="./CSS/normalize.css">
  <link rel="stylesheet" href="./CSS/estilos-miller.css">
  <!-- <link rel="stylesheet" href="./CSS/estilos-yaslin.css"> -->
</head>
<body>
  <div class="container">
    <header>
      <div class="row">
        <nav class="nav">
          <a href="{{ route('home') }}"><img src="./images/icono solo cut.png" class="nav-logo" onclick="location.href='inicio.html'" alt="Logo de la aplicacion"></a>
        </nav> 
      </div>
    </header>

    <main>

      <section class="encuesta">
       
        <h1 class="h1">BIENVENIDO AL FORMULARIO DE BIENVENIDA</h1>
           <h2>Hola <b>{{ auth()->user()->name  }}</b> ¡Gracias por participar en esta encuesta! Sus respuestas nos ayudarán a comprender 
             mejor su salud mental y proporcionarle el apoyo que necesita.
         </h2> <br>
        <h3>¡VAMOS SIGUE BAJANDO!</h3> 
          <br>
        <img class="flecha" src="images/flechaAbajo.png" alt="flecha Abajo">        
        <br>
        <br></br>
        <hr></br>


        <h4> 1. ¿Con qué frecuencia se ha sentido desanimado(a) o con poca esperanza?</h4><br>

          <form action="{{ route('quizz.create')  }}" method="POST">
 {{ csrf_field() }}
  <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
<div class="encuesta-preguntas">
      <input type="radio" id="desanimado nunca" name="desanimado" value="Nunca" required>
      <h5 for="desanimado nunca">Nunca</h5>
 
          <input type="radio" id="desanimado algunas veces" name="desanimado" value="Algunas Veces">
          <h5 for="desanimado algunas veces">Algunas veces</h5>
 
          <input type="radio" id="desanimado a menudo" name="desanimado" value="A Menudo">
          <h5 for="desanimado a menudo">A menudo</h5>
 
          <input type="radio" id="desanimado la mayor parte del tiempo" name="desanimado" value="La mayor parte del tiempo">
          <h5 for="desanimado la mayor parte del tiempo">La mayor parte del tiempo</h5>
 
          <input type="radio" id="desanimado todo el tiempo" name="desanimado" value="todo el tiempo">
          <h5 for="desanimado todo el tiempo">Todo el tiempo</h5>
</div>
       <br></br><br>
    <h4> 2. ¿Te has sentido ansioso o abrumado ultimamente?</h4><br>
    <div class="encuesta-preguntas">
      <input type="radio" id="ansioso nunca" name="ansioso" value="nunca" required>
      <h5 for="ansioso nunca">Nunca</h5>

      <input type="radio" id="ansioso algunas veces" name="ansioso" value="Algunas Veces">
      <h5 for="ansioso algunas veces">Algunas veces</h5>

      <input type="radio" id="ansioso a menudo" name="ansioso" value="A Menudo">
      <h5 for="ansioso a menudo">A menudo</h5>

      <input type="radio" id="ansioso la mayor parte del tiempo" name="ansioso" value="La mayor parte del tiempo">
      <h5 for="ansioso la mayor parte del tiempo">La mayor parte del tiempo</h5>

      <input type="radio" id="ansioso todo el tiempo" name="ansioso" value="todo el tiempo">
      <h5 for="ansioso todo el tiempo">Todo el tiempo</h5>
  </div>

       <br></br><br>

    
       <h4> 3. ¿Has tenido problemas para dormir?</h4><br>
       <div class="encuesta-preguntas">
            <input type="radio" id="dormir muchos problemas" name="dormir" value="muchos problemas" required>
            <h5 for="dormir muchos problemas">Si, y bastantes</h5>

            <input type="radio" id="dormir pocos problemas" name="dormir" value="pocos problemas">
            <h5 for="dormir pocos problemas">No, yo duermo bastante bien</h5>

            <input type="radio" id="dormir aveces problemas" name="dormir" value="aveces problemas">
            <h5 for="dormir aveces problemas">A veces</h5>

            <input type="radio" id="dormir nose problemas" name="dormir" value="nose problemas">
            <h5 for="dormir nose problemas">No me he percatado</h5>

 </div>
      <br></br><br>

        <h4>4. ¿Te has sentido que no tienes energías?</h4><br>

      <div class="encuesta-preguntas">    
          <input type="radio" id="energia normal" name="energia" value="normal" required>
          <h5 for="energia normal">Siento que puedo correr un maraton</h5>
  
          <input type="radio" id="energia un poco cansado" name="energia" value="un poco cansado">
          <h5 for="energia un poco cansado">Me he sentido un poco cansado(a)</h5>
  
          <input type="radio" id="energia muy cansado" name="energia" value="muy cansado">
          <h5 for="energia muy cansado">Me he sentido muy cansado(a)</h5>
  
          <input type="radio" id="energia sin energia" name="energia" value="sin energia">
          <h5 for="energia sin energia">Estoy practicamente moviendome en contra de mi voluntad</h5>

 </div>

        <br></br><br>

        <h4>5. ¿Ha tenido dificultades para concentrarse o prestar atención?</h4><br>

        <div class="encuesta-preguntas">
          <input type="radio" id="concentracion normal" name="concentracion" value="normal" required>
          <h5 for="concentracion normal">Para nada</h5>
  
          <input type="radio" id="concentracion algunas dificultades" name="concentracion" value="algunas dificultades">
          <h5 for="concentracion algunas dificultades">He tenido algunas dificultades</h5>
  
          <input type="radio" id="concentracion muchas dificultades" name="concentracion" value="muchas dificultades">
          <h5 for="concentracion muchas dificultades">He tenido muchas dificultades</h5>
  
          <input type="radio" id="concentracion sin concentracion" name="concentracion" value="sin concentracion">
          <h5 for="concentracion sin concentracion">NO ME CONCENTRO EN NADA</h5>

 </div>
        <br></br><br>

       <h4>6. ¿Ha sentido perdida apetito o has comido más de lo normal?</h4><br>


    <div class="encuesta-preguntas">
          <input type="radio" id="apetito normal" name="apetito" value="normal" required>
          <h5 for="apetito normal">No he tenido cambios en mi apetito</h5>
  
          <input type="radio" id="apetito poco apetito" name="apetito" value="poco apetito">
          <h5 for="apetito poco apetito">He perdido un poco de apetito</h5>
  
          <input type="radio" id="apetito mucho apetito" name="apetito" value="mucho apetito">
          <h5 for="apetito mucho apetito">Siento que me Auto Digiero</h5>

 </div>
        <br></br><br>

       <h4>7. ¿Se ha sentido irritable o de mal humor en los últimos dias?</h4><br>

    <div class="encuesta-preguntas">
          <input type="radio" id="irritable no" name="irritable" value="no" required>
          <h5 for="irritable no">Siempre ando de beun humor</h5>
  
          <input type="radio" id="irritable un poco" name="irritable" value="un poco">
          <h5 for="irritable un poco">Tal vez un poco</h5>
  
          <input type="radio" id="irritable mucho" name="irritable" value="mucho">
          <h5 for="irritable mucho">Me sentido muy irritable</h5>
  
          <input type="radio" id="irritable constantemente" name="irritable" value="constantemente">
          <h5 for="irritable constantemente">¿Y tu quien eres? (SUPER IRRITADO)</h5>

 </div>
        <br></br><br>

       <h4>8. ¿Ha tenido pensamientos de hacerse daño a sí mismo(a) o a otros?</h4><br>

<div class="encuesta-preguntas">
          <input type="radio" id="danio si misma planes" name="danio_asimismo" value="planes" required>
          <h5 for="danio si misma planes">Si, he tenido esos pensamientos</h5>
  
          <input type="radio" id="danio si misma intento" name="danio_asimismo" value="intento">
          <h5 for="danio si misma intento">He intentado hacer y hacerme daño</h5>

          <input type="radio" id="cero dano" name="danio_asimismo" value="cero">
          <h5 for="danio si misma intento">No tengo esos pensamientos</h5>

 </div>
        <br></br><br>

        <h4>9.¿Con qué frecuencia se preocupa excesivamente por cosas como el dinero, el trabajo o la salud?</h4><br>

<div class="encuesta-preguntas">
          <input type="radio" id="ansiedad generalizada nunca" name="ansiedad generalizada" value="nunca" required>
          <h5 for="ansiedad generalizada nunca">Nunca</h5><br>
  
          <input type="radio" id="ansiedad generalizada algunas veces" name="ansiedad generalizada" value="Algunas Veces">
          <h5 for="ansiedad generalizada algunas veces">Algunas veces</h5><br>
  
          <input type="radio" id="ansiedad generalizada a menudo" name="ansiedad generalizada" value="A Menudo">
          <h5 for="ansiedad generalizada a menudo">A menudo</h5><br>
  
          <input type="radio" id="ansiedad generalizada la mayor parte del tiempo" name="ansiedad generalizada" value="La mayor parte del tiempo">
          <h5 for="ansiedad generalizada la mayor parte del tiempo">La mayor parte del tiempo</h5><br>
  
          <input type="radio" id="ansiedad generalizada todo el tiempo" name="ansiedad generalizada" value="todo el tiempo">
          <h5 for="ansiedad generalizada todo el tiempo">Todo el tiempo</h5><br>
 </div>
        <br></br><br>



        <h4>10.¿Ha tenido ataques de pánico repentinos e intensos que le han causado mucho miedo?</h4><br>
        
<div class="encuesta-preguntas">    
          <input type="radio" id="panico nunca" name="panico" value="nunca" required>
          <h5 for="panico nunca">Soy de Hierro</h5><br>
  
          <input type="radio" id="panico una o dos veces" name="panico" value="una o dos veces">
          <h5 for="panico una o dos veces">Nah, una o dos veces</h5><br>
  
          <input type="radio" id="panico algunas veces al mes" name="panico" value="algunas veces al mes">
          <h5 for="panico algunas veces al mes">Algunas veces al mes</h5><br>
  
          <input type="radio" id="panico varias veces a la semana" name="panico" value="varias veces a la semana">
          <h5 for="panico varias veces a la semana">Varias veces a la semana</h5><br>
  
          <input type="radio" id="panico casi todos los dias" name="panico" value="casi todos los dias">
          <h5 for="panico casi todos los dias">Soy un saco de panico (Nunca Estoy tranquilo)</h5><br>

 </div>
        <br></br><br>

<button type="submit" class="buttonEviar" alt="Boton Enviar">Enviar</button>
      </form>

      </section>

    </main>


  </div>
  <br><br>
  <div class="footerP">
    <p>&copy; MENTAL CONSTRUCTION Corporation</p> <br><br>
</div>

</body>
</html>