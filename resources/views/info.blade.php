@extends('layouts.app')

@section('content')
<header class="hero-image" style="background-image: url({{URL::asset('images/info_hero.jpg')}});">
    <div class="container">
      <h1 class="hero-text">¿Quienes somos?</h1>
    </div>
</header>
<div class="container-fluid principal">
    <div class="row justify-content-center">
        <div class="col-md-8 main-container mt-2 mb-2 rounded-3 shadow">
                {{-- imagen --}}
                <div class="img-accordeon">
                    <img src="{{URL::asset('images/logo.png')}}" alt="ForoDrones" class="img-fluid" />
                </div>
                {{-- Contenedor información --}}
                <div class="accordeon">
                    <h1>¿Tienes dudas sobre nosotros? A continuación podrás informarte.</h1>
                    <ul>
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h2>¿Quienes somos?</h2>
                            <p>
                                ¡Hola! Si has acudido aquí porque aún no sabes quienes somos, te lo explicamos brevemente.
                                <br><br>
                                Somos un sitio web enfocado a un foro en donde publicamos los eventos más relevantes del año
                                sobre drones, aeromodelismo, rc, etc.
                                <br><br>
                                También poseemos un magnifico foro con una gran comunidad que postea preguntas y anuncios sobre este
                                mundillo.
                                Puedes acceder a él para informarte sobre todo y también podrás publicar posts y comentarios a otros usuarios
                                identificándote en nuestra web.
                                <br><br>
                                Resuelve todas tus dudas y acúde a los eventos organizados por la comunidad y únete a este gran mundo tecnológico.
                                <br><br>
                                ¿A que esperas?
                            </p>
                        </li>
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h2>Contáctanos</h2>
                            <p>
                                ¡Gracias por visitar nuestro sitio web! Si tienes alguna pregunta, comentario o consulta, no dudes en ponerte en contacto con nosotros. Estamos aquí para ayudarte y brindarte la mejor atención posible. A continuación, encontrarás nuestra información de contacto:
                                <br><br>
                                Número de Teléfono:
                                <strong>664 34 56 33</strong>
                                <br><br>
                                Correo Electrónico:
                                <strong>forodrones123@gmail.com</strong>
                                <br><br>
                                Contáctanos:
                                También puedes comunicarte con nosotros a través del Email de contacto en nuestro sitio web. Nos comprometemos a responder lo antes posible.
                                <br><br>
                                Redes Sociales:
                                Síguenos en nuestras redes sociales para mantenerte actualizado/a sobre nuestras últimas noticias, promociones y novedades. Puedes encontrarnos en:
                                <br><br>
                                <strong>Facebook</strong> - <a href="https://es-es.facebook.com/">https://es-es.facebook.com/</a><br>
                                <strong>Instagram</strong> - <a href="https://www.instagram.com/">https://www.instagram.com/</a><br>
                                <strong>Twitter</strong> - <a href="https://twitter.com/?lang=es">https://twitter.com/?lang=es</a><br>
                                <strong>Twitch</strong> - <a href="https://www.twitch.tv/">https://www.twitch.tv/</a><br>
                            </p>
                        </li>
                        <li>
                            <input type="checkbox" checked>
                            <i></i>
                            <h2>Términos y condiciones de uso</h2>
                            <p>
                            Términos y Condiciones Generales de Uso del Sitio Web
                            <br><br>
                            Bienvenido/a al sitio web foroDrones. Estos términos y condiciones generales de uso (en adelante, "Términos y Condiciones") regulan el acceso y uso de nuestro sitio web. Al acceder y utilizar nuestro sitio web, aceptas cumplir y quedar sujeto/a a estos Términos y Condiciones. Si no estás de acuerdo con alguna parte de estos términos, te recomendamos que no accedas ni utilices nuestro sitio web.
                            <br><br>
                            Uso del Sitio Web
                            <br>
                            1.1. El acceso y uso de nuestro sitio web están permitidos de forma temporal y sujeto a los términos y condiciones establecidos en este documento.
                            <br>
                            1.2. Queda prohibido utilizar nuestro sitio web con fines ilícitos, fraudulentos o de cualquier manera que pueda causar daño o perjuicio a nosotros o a terceros.
                            <br>
                            1.3. Nos reservamos el derecho de restringir, suspender o cancelar tu acceso a nuestro sitio web en cualquier momento y por cualquier motivo, sin previo aviso.
                            <br><br>  
                            Estos son los Términos y Condiciones Generales de Uso de nuestro sitio web. Si tienes alguna pregunta o consulta, por favor, contáctanos. Gracias por utilizar nuestro sitio web.                        
                            </p>
                        </li>
                    </ul>
                </div>
                {{-- BOTÓN REGRESO --}}
            <div class="text-center m-5">
                <a class="btn shadow text-center" href="{{ URL('/') }}"><i class="bi bi-arrow-left-square-fill"></i> VOLVER</a>
            </div>
        </div>
    </div>
</div>
@endsection