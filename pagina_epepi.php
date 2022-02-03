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
                    <h1 class="escuela-titulo">ESCUELA PROFESIONAL EDUCACIÓN INTERCULTURAL</h1>
                    <p class="escuela-parrafo-1">
                        <b>Perfil profesional</b>
                        <br>
                        Se forma de manera integral e inclusiva , son docentes capaces de conducir con niveles de calidad , eficiencia ,eficacia y pertenencia el proceso enseñanza-aprendizaje, partiendo del respeto y la valoracion de la diversidad cultura.En su formación se desarrolla la concepción científica y pedagógica , realizan investigaciones educacionales y culturales orientadas a las innovaciones de manera que contribuyan al desarrollo del pais.
                    </p>

                    <p class="escuela-parrafo-1">
                        <b>Campo laboral</b>
                        <br>
                        Docencia y direccion de instituciones educativas .Diseño y desarrollo de proyectos educativos diversos.Capacitación de docentes y padres de familia. Desarrollo de recursos educativos diversos.Consultoria en ONG y colegios en técnicas pedagógicas que permitan el desarrollo integral del estudiante de acuerdo al currículo intercultural.Investigación sobre los métodos y estrategias de aprendizaje infantil.Diseñar y promueve la aplicacion de programas de Educación Intercultural que desarrollen la responsabilidad social.
                    </p>

                    <p class="escuela-parrafo-1">
                        <b>Grado:</b> Bachiller de Educación
                        <br>
                        <b>Título:</b> Licenciado en Educación
                        <br>
                        <b>Duración:</b> 10 semestre académicos
                    </p>
                </div>
                <div class="col-md-6 escuela-img">
                    <img src="public/img/escuelas/educación.png" class="img img-fluid" alt="">
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
                                        <p class="text-center px-2 titulo-img"></p>

                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="galeria-detalle">
                                        <div class="imagen">
                                            <img src="public/img/slider/agro.JPG" alt="" class="img-fluid">
                                        </div>                                            
                                        <p class="text-center px-2 titulo-img"></p>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="galeria-detalle">
                                        <div class="imagen">
                                            <img src="public/img/slider/pabellon-comedor.jpg" alt="" class="img-fluid">
                                        </div>                                            
                                        <p class="text-center px-2 titulo-img"></p>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="galeria-detalle">
                                        <div class="imagen">
                                            <img src="public/img/slider/administracion.JPG" alt="" class="img-fluid">
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