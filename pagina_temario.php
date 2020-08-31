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
            
            <!-- ok titulo -->
            <div class="pt-3 pb-5">
                <h1 class="display-4 titulo-temario">
                    TEMARIO
                </h1>
            </div>
            
            <!-- acordion tpor temario -->
            <div class="accordion" id="accordionExample">

                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                CULTURA GENERAL
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li>
                                    <b>Filosofía</b>.- Introducción a la filosofía, etimología, origen, definición, actitud filosófica, disciplinas filosóficas, desarrollo del pensamiento filosófico, aspectos generales de la filosofía antigua, media, moderna y contemporánea.
                                </li>
                                <li>
                                    <b>Psicología</b>.- Características físicas - psicológicas de la adolescencia y juventud. Sexualidad, procesos cognitivos,  afectivos y personalidad.</li>
                                <li>
                                    <b>Historia del Perú y Universal</b>.- Revoluciones industriales e historia de las epidemias y pandemias en el mundo. Culturas prehispánicas del Perú, hechos importantes de los gobiernos peruanos desde el oncenio de Leguía hasta la actualidad.</li>
                                <li>
                                    <b>Geografía y Medio Ambiente</b>.- Geografía política del Perú y de Apurímac, sistema hidrográfico, regiones y ecorregiones naturales, La contaminación natural y áreas protegidas.</li>
                                <li>
                                    <b>Literatura peruana y universal</b>.- Corrientes literarias: peruana y universal. Característica, representantes y obras.</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="heading_dos">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_dos" aria-expanded="false" aria-controls="collapse_dos">
                                MATEMÁTICA I
                            </button>
                        </h2>
                    </div>
                    <div id="collapse_dos" class="collapse" aria-labelledby="heading_dos" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li><b>Conjuntos</b></li>
                                <li><b>Sistema de numeración</b></li>
                                <li><b>Cuatro operaciones</b></li>
                                <li><b>Teoría de exponentes, polinomios</b></li>
                                <li><b>Productos notables</b></li>
                                <li><b>Relaciones y funciones</b></li>
                                <li><b>Ecuaciones de 1er y 2do grado y sistema de ecuaciones</b></li>
                                <li><b>Matrices y determinantes</b></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="heading_tres">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_tres" aria-expanded="false" aria-controls="collapse_tres">
                                MATEMÁTICA II
                            </button>
                        </h2>
                    </div>
                    <div id="collapse_tres" class="collapse" aria-labelledby="heading_tres" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li><b>Segmentos y ángulos</b></li>
                                <li><b>Triángulos</b></li>
                                <li><b>Circunferencia</b></li>
                                <li><b>Proporcionalidad y semejanzas</b></li>
                                <li><b>Relaciones métricas en el triángulo rectángulo, áreas de regiones planas, prismas y cilindro</b></li>
                                <li><b>Conversión y razones trigonométricas</b></li>
                                <li><b>Ángulos en posiciones normal</b></li>
                                <li><b>Identidades trigonométricas</b></li>
                                <li><b>Ecuación de la recta</b></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="heading_cuatro">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_cuatro" aria-expanded="false" aria-controls="collapse_cuatro">
                                RAZONAMIENTO MATEMÁTICO
                            </button>
                        </h2>
                    </div>
                    <div id="collapse_cuatro" class="collapse" aria-labelledby="heading_cuatro" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li><b>Situaciones lógicas</b></li>
                                <li><b>Planteo de ecuaciones</b></li>
                                <li><b>Relojes y calendarios</b></li>
                                <li><b>Fracciones, porcentajes y probabilidades</b></li>
                                <li><b>Operadores matemáticos</b></li>
                                <li><b>Sucesiones, series y sumatorias</b></li>
                                <li><b>Conteo de figuras geométricas</b></li>
                                <li><b>Perímetros y áreas de regiones sombreadas</b></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="heading_cinco">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_cinco" aria-expanded="false" aria-controls="collapse_cinco">
                                RAZONAMIENTO VERBAL
                            </button>
                        </h2>
                    </div>
                    <div id="collapse_cinco" class="collapse" aria-labelledby="heading_cinco" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li><b>El texto</b></li>
                                <li><b>Textos descriptivos</b></li>
                                <li><b>Textos argumentativos</b></li>
                                <li><b>Textos expositivos</b></li>
                                <li><b>Textos narrativos</b></li>
                                <li><b>Textos instructivos</b></li>
                                <li><b>Antónimos, fenómenos semánticos: homonimia, homografía, homofonía y paronimia</b></li>
                                <li><b>Hiperónimos e hipónimos, holónimos, merónimos, inclusión e implicancia</b></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="heading_seis">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_seis" aria-expanded="false" aria-controls="collapse_seis">
                                FÍSICA
                            </button>
                        </h2>
                    </div>
                    <div id="collapse_seis" class="collapse" aria-labelledby="heading_seis" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li><b>Ecuación dimensional y vectores</b></li>
                                <li><b>Cinemática de una partícula</b></li>
                                <li><b>Estática y dinámica</b></li>
                                <li><b>Potencia y trabajo</b></li>
                                <li><b>Mecánica de fluidos</b></li>
                                <li><b>Temperatura, dilatación y calorimetría</b></li>
                                <li><b>Electrostática</b></li>
                                <li><b>Electrodinámica</b></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="heading_siete">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_siete" aria-expanded="false" aria-controls="collapse_siete">
                                QUÍMICA
                            </button>
                        </h2>
                    </div>
                    <div id="collapse_siete" class="collapse" aria-labelledby="heading_siete" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li><b>Estructura atómica</b></li>
                                <li><b>Los números cuánticos y tabla periódica</b></li>
                                <li><b>Enlace químico y nomenclatura inorgánica</b></li>
                                <li><b>Unidades químicas de masa</b></li>
                                <li><b>Estado gaseoso</b></li>
                                <li><b>Soluciones</b></li>
                                <li><b>Reacciones químicas</b></li>
                                <li><b>Química inorgánica</b></li>
                                <li><b>Compuestos oxigenados</b></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="heading_ocho">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_ocho" aria-expanded="false" aria-controls="collapse_ocho">
                                ECONOMÍA
                            </button>
                        </h2>
                    </div>
                    <div id="collapse_ocho" class="collapse" aria-labelledby="heading_ocho" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li><b>Definición de la economía</b></li>
                                <li><b>Las necesidades humanas</b></li>
                                <li><b>El proceso económico</b></li>
                                <li><b>La inflación</b></li>
                                <li><b>El dinero, el capital, el precio</b></li>
                                <li><b>Los mercados</b></li>
                                <li><b>El sector publico</b></li>
                                <li><b>Sistema bancario</b></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- fin ok -->
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