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

            <h5 class="text-center text-lead ">PROCESO DE ADMISIÓN  2021-1</h5>
            <hr class="line-reglamento">

            <div>
                <table class="table text-center table-bordered table-striped table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ESCUELAS <br> PROFESIONALES</th>
                            <th scope="col">EXAMEN - EXTRAORDINARIO</th>
                            <!-- <th scope="col">EXAMEN - CEPRE</th> -->
                            <th scope="col">EXAMEN - ORDINARIO</th>
                            <th scope="col">TOTAL ADMISIÓN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>ADMINISTRACIÓN DE <br> EMPRESAS</td>
                            <td>33</td>
                            <!-- <td>17</td> -->
                            <td>17</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>CONTABILIDAD</td>
                            <td>33</td>
                            <!-- <td>-</td> -->
                            <td>17</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>EDUCACIÓN <br> PRIMARIA <br> INTERCULTURAL</td>
                            <td>33</td>
                           <!--  <td>-</td> -->
                            <td>17</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>INGENIERÍA <br> AMBIENTAL</td>
                            <td>33</td>
                            <!-- <td>-</td> -->
                            <td>17</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>INGENIERÍA DE<br> SISTEMAS</td>
                            <td>33</td>
                            <!-- <td>-</td> -->
                            <td>17</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>INGENIERÍA <br> AGROINDUSTRIAL</td>
                            <td>33</td>
                            <!-- <td>-</td> -->
                            <td>17</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <th scope="row">#</th>
                            <td>TOTAL</td>
                            <td>198</td>
                           <!--  <td>-</td> -->
                           <td>102</td>
                            <td>300</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


            <h5 class="text-center mt-4 text-lead ">PROCESO DE ADMISIÓN 2021 - I EXTRAORDINARIO</h5>
            <hr class="line-reglamento">
            
            <p>
                <img src="public/img/cuadro_vacantes.jpg" alt="" class="img-fluid w-100 border-dark">
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