                <div>
                    <div class="nombre-pagina">
                        <img id="logo" src="./images/logo negro.png" alt=""> 
                        <span>Mental <br>Construction</span>
                    </div>
                    <!-- <button class="boton">
                        <img src="./images/inicio.svg" alt="">
                        <span>Explorar</span>
                    </button> -->
                </div>
                    <nav class="nav_menu">
                        <ul>
                            <li>
                                <a id="inicio" href="/principal">
                                    <img src="./images/inicio.svg" alt="">
                                        <span>Inicio</span>
                                </a>
                            </li>
                            <li>
                                <a id="explorar" href="/explorar">
                                    <img src="./images/buscar.svg" alt="">
                                        <span>Explorar</span>
                                </a>
                            </li>
                            <li>
                                <a id="respiracion" href="/respiracion">
                                    <img src="./images/cargar.svg" alt="">
                                        <span>Respiración</span>
                                </a>
                            </li>
                            <li>
                                <a id="grupo" href="/apoyo">
                                    <img src="./images/grupal.svg" alt="">
                                        <span>Grupo de Apoyo</span>
                                </a>
                            </li>
                            <li>
                                <a id="profesionales" href="/profesionales">
                                    <img src="./images/conversacion.svg" alt="">
                                        <span>Profesionales</span>
                                </a>
                            </li>
                            <!--li>
                                <a id="citas" href="/citas">
                                    <img src="./images/calendario.svg" alt="">
                                        <span>Citas</span>
                                </a>
                            </li-->
                            <li>
                                <a id="dormir" href="/dormir">
                                    <img src="./images/luna.svg" alt="">
                                        <span>Hora de Dormir</span>
                                </a>
                            </li>

                            <li>
                                <a id="cerrarSesion" href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-form2').submit();">
                                    <img src="./images/flechaIzquierdaArrow.svg" alt="">
                                        <span>Salir</span>
                                </a>
                            </li>
                    </nav>
                 
                <div>
                    <div class="linea"></div>

                <div class="usuario">
                    <a href="{{ route('profile.edit') }}"> <img src="./images/usuario.svg" alt=""> </a>
                    <div class="info_usuario">
                        <div class="nombre_email">
                            <span class="nombre">{{ Auth::user()->name }}</span>
                            <span class="email">{{ Auth::user()->email }}</span>
                            <a href="/home">Ir al Home</a>
                        </div>
                        <img src="./images/puntos.svg" alt="">
                    </div>

                    <form id="logout-form2" 
                        action="{{ route('logout') }}" 
                        method="POST" 
                        style="display: none;">
                        {{ csrf_field() }}
                    </form>

                </div>
                </div>
    