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
                    EXAMEN PRIMERA SELECCIÓN.
                </h1>
                <br>
                <small class="text-danger">(Cerrado para el Proceso 2021-1)</small>
            </div>

            <div>
                <ul>
                    
                    <li>Documento Nacional de Identidad.</li>
                    <li>Fotografía actualizada del postulante en archivo jpg</li>
                    <li>Comprobante de pago por derecho de admisión</li>
                    <li>Constancia firmada por el director del colegio señalando que el postulante se encuentra cursando el último año de educación secundaria</li>
                </ul>

                <b class="bg-danger text-white pl-5 pr-2 py-1">COSTO <i class="fas fa-wallet"></i> </b> <br>
                <i class="fas fa-tag"></i> <b>Primera selección de colegio nacional: </b> <span class="badge badge-warning">S/. 150.00</span><br>
                <i class="fas fa-tag"></i> <b>Primera selección de colegio particular: </b> <span class="badge badge-warning">S/. 180.00</span><br>
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