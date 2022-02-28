<!doctype html>
<html lang="en">
    <head>
        <!-- HEADER CDNS -->
        <?php
            require_once('partials/cdnsHeader.html');
        ?>

        <title>Unajma admisión 2022-1</title>
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
                    <h1 class="escuela-titulo">ESCUELA PROFESIONAL ADMINISTRACIÓN DE EMPRESAS</h1>
                    <p class="escuela-parrafo-1">
                        <b>Perfil profesional</b>
                        <br>
                        Profesional que se caracteriza por su sólida formación y conocimientos que le permiten desarrollar aptitudes, habilidades y destrezas, toma de decisiones, liderazgo ético y social, amplia visión de las exigencias de un contexto globalizado y cambiante en beneficio de la organización. Posee la capacidad de ser emprendedor y toma iniciativa en las actividades empresariales y organizacionales, utilizando conocimientos técnicos, como herramientas e instrumentos de eficiencia, eficacia y efectividad en la gestión empresarial, a partir de la existencia de factores incidentes en el entorno interno y externo dentro de un marco de responsabilidad, creatividad y sensibilidad social; sustentados en el desarrollo y crecimiento sostenible.
                    </p>

                    <p class="escuela-parrafo-1">
                        <b>Campo laboral</b>
                        <br>
                        Desempeña cargos en empresas locales y nacionales, en funciones de gerencia, planificación, organización y dirección. Así mismo, en dirección estratégica, comercio electrónico, negocios y proyectos privados y públicos, así como, cargos en áreas como mercadotecnia, finanzas, producción, operatividad local o global, logística, banca, seguros y comercio, tanto en el ámbito local como internacional. Gestor de su propia unidad empresarial
                        Construcción de redes de investigación interdisciplinaria, investigador, ejecutivo o asesor de todo tipo de empresas u organizaciones que se vinculen con fenómenos de orden económico. Docente en instituciones de educación superior.

                    </p>

                    <p class="escuela-parrafo-1">
                        <b>Grado:</b> Bachiller en Administración de Empresas
                        <br>
                        <b>Título:</b> Licenciado en Administración de Empresas
                        <br>
                        <b>Duración:</b> 10 semestre académicos
                    </p>
                </div>
                <div class="col-md-6 escuela-img">
                    <img src="public/img/escuelas/adminis.png" class="img img-fluid" alt="">
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
                                            <img src="public/img/slider/administracion.jpg" alt="" class="img-fluid">
                                        </div>                                            
                                        <p class="text-center px-2 titulo-img"></p>

                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="galeria-detalle">
                                        <div class="imagen">
                                            <img src="public/img/slider/epae/img1.JPG" alt="" class="img-fluid">
                                        </div>                                            
                                        <p class="text-center px-2 titulo-img"></p>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="galeria-detalle">
                                        <div class="imagen">
                                            <img src="public/img/slider/epae/img2.jpg" alt="" class="img-fluid">
                                        </div>                                            
                                        <p class="text-center px-2 titulo-img"></p>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="galeria-detalle">
                                        <div class="imagen">
                                            <img src="public/img/slider/epae/img3.JPG" alt="" class="img-fluid">
                                        </div>                                            
                                        <p class="text-center px-2 titulo-img"></p>
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