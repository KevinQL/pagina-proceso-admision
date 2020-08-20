<!doctype html>
<html lang="en">
    <head>
        <!-- HEADER CDNS -->
        <?php
            require_once('partials/cdnsHeader.html');
        ?>

        <title>Unajma admisión 2020</title>
    </head>
    <body>

        <!-- NAVEGACIÓN -->
        <?php
            include_once('sections/navegacion.html');
        ?>

        <!-- CUERPO -->
    
        <div class="container pb-4 pt-5 seccion-escuelas">
            
            <!-- <h2 class="text-center text-lead py-4 px-5">ESCUELA PROFESIONAL DE ESCUELA NOMBRE PRUEBA</h2> -->

            <div class="row">
                <div class="col-md-6 ">
                    <h1 class="escuela-titulo">ESCUELA PROFESIONAL DE INGENIERÍA DE SISTEMAS</h1>
                    <p class="escuela-parrafo-1">
                        <b>Perfil profesional</b>
                        <br>
                        Profesional con sólida formación en conocimientos científicos y tecnológicos que le permitan analizar, comprender, modelar y optimizar el proceso de toma de decisiones en una organización, donde el factor tecnología de información tiene una labor integradora. Es un profesional capaz de modelar estructuras y procesos organizativos, diseñar y administrar los recursos de tecnología de información, construir e implantar aplicaciones de tecnología informática, así como de diseñar soluciones a problemas complejos.
                        En su formación se desarrollan y potencian diversas habilidades, destrezas, valores y actitudes necesarias para lograr una conciencia ciudadana en la conservación y mejoramiento del ambiente, calidad de vida y uso racional de los recursos naturales.

                    </p>

                    <p class="escuela-parrafo-1">
                        <b>Campo laboral</b>
                        <br>
                        En entidades estatales y privadas, consultorías profesionales, responsables de manejo de la información en las organizaciones, optimiza su procesamiento y aplicación, gerente de departamento o dirección de informática o sistemas en las empresas, ingeniero de servicios de software y hardware para el desarrollo y mantenimiento de infraestructura de comunicaciones, redes, cableado y sistemas de información. Gerencia las empresas especializadas en el desarrollo e implementación de infraestructura tecnológica para negocios electrónicos. Consultor de proyectos de desarrollo, asesoría y consultoría de sistemas de información, así como conducción de empresas de asesoría, consultoría y auditoría de sistemas. Analista, desarrollador de software y líder en la dirección de proyectos de ingeniería de software.
                    </p>

                    <p class="escuela-parrafo-1">
                        <b>Grado:</b> Bachiller en Ingeniería de Sistemas
                        <br>
                        <b>Título:</b> Ingeniero de Sistemas
                        <br>
                        <b>Duración:</b> 10 semestre académicos
                    </p>
                </div>
                <div class="col-md-6 escuela-img">
                    <img src="public/img/epis_pag.jpg" class="img img-fluid" alt="">
                </div>

                
            </div>


            <div class="py-5">
                <h2 class="text-center lead mb-4 titulo-galeria">
                    
                </h2>
<!-- fin imagensee scrolleer -->
                <div class="escuelas-galeria">
                    <div class="glide-nombre glide-escuelas">
                        <div data-glide-el="track" class="glide__track">
                            <ul class="glide__slides">
                                <li class="glide__slide gli-li">
                                    <div class="galeria-detalle">
                                        <div class="imagen">
                                            <img src="public/img/slider/epis.jpg" alt="" class="img-fluid">
                                        </div>                                            
                                        <p class="text-center px-2 titulo-img">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                                            <a href="#holamund">hola</a>
                                        </p>

                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="galeria-detalle">
                                        <div class="imagen">
                                            <img src="public/img/slider/agro.JPG" alt="" class="img-fluid">
                                        </div>                                            
                                        <p class="text-center px-2 titulo-img">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="galeria-detalle">
                                        <div class="imagen">
                                            <img src="public/img/slider/pabellon-comedor.jpg" alt="" class="img-fluid">
                                        </div>                                            
                                        <p class="text-center px-2 titulo-img">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="galeria-detalle">
                                        <div class="imagen">
                                            <img src="public/img/slider/administracion.JPG" alt="" class="img-fluid">
                                        </div>                                            
                                        <p class="text-center px-2 titulo-img">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    </div>                                	
                                </li>
                            </ul>
                        </div>
                
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"> < </button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"> > </button>
                        </div>
                
                        <!-- <div class="glide__bullets" data-glide-el="controls[nav]">
                            <button class="glide__bullet" data-glide-dir="=0"></button>
                            <button class="glide__bullet" data-glide-dir="=1"></button> 
                            <button class="glide__bullet" data-glide-dir="=2"></button> 
                            <button class="glide__bullet" data-glide-dir="=3"></button> 
                        </div> -->
                    </div> 
                </div>
<!-- fin imagensee scrolleer -->
            </div>

        </div>



        <!-- PIE DE PAGÍNA -->
        <?php
            include_once('sections/piePagina.html');
        ?>


        <!-- cdn's Footer - scripts. . . -->
        <?php
            require_once('partials/cdnsFooter.html');
        ?>

    </body>
</html>