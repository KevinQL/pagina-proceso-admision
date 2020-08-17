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
                    <h1 class="escuela-titulo">ESCUELA PROFESIONAL CONTABILIDAD</h1>
                    <p class="escuela-parrafo-1">
                        <b>Perfil profesional</b>
                        <br>
                        Posee conocimiento de las diferentes teorías y escuelas del pensamiento contable, el uso de las herramientas tegnológicas, y para hacer auditorías, asi como , habilidades cuantitativas y finanacieras , que le permitan hacer un análisis profundo de la situación económica financiera de las empresas. Valores éticos que reflejaren un buen comportamiento en el ámbito privado y público.
                    </p>

                    <p class="escuela-parrafo-1">
                        <b>Campo laboral</b>
                        <br>
                        Podrá desempeñarse en organizaciones tanto públicas como privadas en los siguientes cargos :
                        <br> 
                        contable, Director Financiero, Dorectores de Planiacion, Gerente General, Auditor interno o externo, Revisor Fiscal, Consultores Independientes, Contralor General, Docentes Investigadores, etc.
                    </p>

                    <p class="escuela-parrafo-1">
                        <b>Grado:</b> Bachiller en Ciencias Contables y Financieras
                        <br>
                        <b>Título:</b> Contador Público
                        <br>
                        <b>Duración:</b> 10 semestre académicos
                    </p>
                </div>
                <div class="col-md-6 escuela-img">
                    <img src="public/img/escuelas/conta.png" class="img img-fluid" alt="">
                </div>

                
            </div>


            <div class="py-5">
                <h2 class="text-center lead mb-4 titulo-galeria">
                    Lorem ipsum dolor sit amet.
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
                                        <p class="text-center px-2 titulo-img">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

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