<!doctype html>
<html lang="en">
    <head>
        <!-- HEADER CDNS -->
        <?php
            require_once('partials/cdnsHeader.html');
        ?>

        <title>Unajma admisión 2021</title>
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
                    EXAMEN ORDINARIO
                </h1>
            </div>

            <div>
                <ul>
                    <li>Documento Nacional de Identidad.</li>
                    <li>Copia del certificado de estudios originales de los cinco años de Educación Secundaria el cual debe estar visado por la DRE o por la UGEL a la cual pertenece la institución educativa, o Constancia de Logro de Aprendizajes.</li>
                    <li>Comprobante de pago por derecho de inscripción al examen de admisión.</li>
                    <li>Fotografía actualizada del postulante en archivo jpg.</li>
                </ul>

                <b class="bg-danger text-white pl-5 pr-2 py-1">COSTO <i class="fas fa-wallet"></i> </b> <br>
                <i class="fas fa-tag"></i> <b>Examen ordinario egresado de colegio nacional: </b> <span class="badge badge-warning">S/. 210.00</span><br>
                <i class="fas fa-tag"></i> <b>Examen ordinario egresado de colegio particular: </b> <span class="badge badge-warning">S/. 245.00</span><br>
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