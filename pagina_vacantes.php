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

        
        <div class="container py-4">

            <div class="pt-3 pb-5">
                <h1 class="display-4 titulo-temario">
                    CUADRO DE VACANTES POR CARRERA
                </h1>
            </div>                    

            <p>
                <img src="public/img/cuadro vacantes.png" alt="" class="img-fluid border-dark">
            </p>

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