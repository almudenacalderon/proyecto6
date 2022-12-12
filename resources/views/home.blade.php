@extends('layouts.master')

@section('content')
    <!-- Home -->
    <header>
        <div class="info-header">
            <h2 style="font-size: 115px;"> GÉNESIS </h2>
            <hr>
            <p style="font-size: 20px;">
                Somos una empresa de desarrollo, expertos en creación de páginas web y APPs. Te ayudamos a crear tu página web
                con la mejor relación calidad-precio.
            </p>
            <button id="boton-header" type="button"> Pide presupuesto </button>
        </div>
    </header>
    </div>

    <section id="simple" class="bg1">
        <div class="contenedor" style="padding: 90px 0; text-align: center;">
            <h3 class="c1" style="font-size: 45px;">Mucho más que un equipo</h3>
            <p class="c2" style="font-size: 20px;">
                En GÉNESIS entendemos las necesidades y objetivos del cliente, así contamos tu historia</p>
        </div>
    </section>

    <section id="pasos">
        <div class="contenedor" style="display: flex;">
            <div class="cajapasos">
                <img src="img/informe-seo.png" alt="">
                <h5 class="c1"> Definición </h5>
                <span class="c2">
                    Simplificamos y concretamos contigo las ideas que tienes para tu página web.
                </span>
            </div>
            <div class="cajapasos">
                <img id="img2" src="img\factor-de-clasificacion.png" alt="">
                <h5 class="c1"> Diseño </h5>
                <span class="c2">
                    Nos ponemos en la piel de nuestros clientes, a fin de llevar a cabo un diseño que refuerce tu marca.
                </span>
            </div>

            <div class="cajapasos">
                <img src="img/red-social.png">
                <h5 class="c1"> Desarrollo </h5>
                <span class="c2">
                    ¡Le damos vida al prototipo! optando por la tecnología que mejor se adapta a ti.
                </span>
            </div>
        </div>
    </section>

    <section id="galeria">
        <div class="contenedor" style="padding: 40px 0;">
            <div class="encabezado">
                <h2 class="c1" style="font-size: 45px; padding: 20px;"> Nuestros últimos proyectos</h2>
                <span class="c2" style="font-size: 18px;">¿Tienes una idea? GÉNESIS la hará realidad </span>
            </div>
            <div class="galeria">
                <div class="fila">

                    <div class="caja-galeria">
                        <img src="img/proyecto.png" alt="">
                    </div>
                    <div class="caja-galeria">
                        <img src="img/proyecto5.png" alt="">
                    </div>

                    <div class="caja-galeria">
                        <img src="img/proyecto2.png" alt="">
                    </div>

                </div>

                <div class="fila">
                    <div class="caja-galeria">
                        <img src="img/proyecto3.png" alt="">
                    </div>
                    <div class="caja-galeria">
                        <img src="img/proyecto6.png" alt="">
                    </div>
                    <div class="caja-galeria">
                        <img src="img/proyecto4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="formulario">
        <div class="contenedor" id="estructura-form">
            <div id="form" class="encabezado">
                <h2 style="font-size: 40px;"> Contáctanos</h2>
                <p> Una gran web para un gran proyecto</p>
                <p> Construye una web a la altura de tu empresa y da un salto de calidad dentro de tu sector.</p>
                <p> Somos capaces de encontrar la mejor solución en un tiempo record, garantizando los mejores resultados.</p>
            </div>
            <form action="" id="contacto">
                <input class="form-input" type="text" placeholder="Nombre">
                <input class="form-input" type="text" placeholder="Apellidos">
                <input class="form-input" type="email" placeholder="Correo electrónico">
                <textarea class="form-input" name="" id="" cols="30" rows="10" placeholder="Dinos lo que quieres"></textarea>
                <div style="display: flex;">
                    <div class="check">
                        <input type="checkbox" id="subs">
                        <label for="subs">Quiero recibir ofertas</label>
                    </div>
                    <div style="width: 30%;">
                        <button id="boton-enviar" type="submit">Enviar</button>
                    </div>
                </div>
        </div>
        </form>
    </section>
@stop
