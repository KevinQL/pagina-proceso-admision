<!doctype html>
<html lang="en">
    <head>
        
        <!-- HEADER CDNS -->
        <?php
            require_once('partials/cdnsHeader.html');
        ?>
        <!-- Include a polyfill for ES6 Promises (optional) for IE11 -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

        <title>Unajma admisión 2021</title>
    </head>
    
    <body>

        <!-- NAVEGACIÓN -->
        <?php
            include_once('sections/navegacion.html');
        ?>

        <!-- ASLIDER PRESENTACIÓN -->
        <section class="slider" id="inicio">

            <div class="glide sle">
                <div data-glide-el="track" class="glide__track">
                    <ul class="glide__slides">

                        <li class="glide__slide">
                            <!-- <img src="public/img/slider/admision_f.jpg" class="" alt="..."> -->
                            <img src="public/img/slider/pabellon-comedor.jpg" class="" alt="...">
                            <div class="texto-slider text-center">
                                <h1 class="display-4 bold"> <!-- d-md-none  -->
                                    <span class="text-admision">EXAMÉN DE</span> ADMISIÓN - 2021-2
                                    <br>
                                    <a href="index.php#admision2" class="btn btn-outline-light btn-lg py-3 text-warning bold">
                                        <i class="fas fa-diagnoses"></i> 
                                        INSCRIPCIONES <span class="text-admision2 bold">2021-2</span>
                                        <i class="fas fa-diagnoses"></i> 
                                    </a>
                                </h1>
                            </div>  
                        </li>
                        <!-- <li class="glide__slide">
                            <img src="public/img/slider/administracion.JPG" class="" alt="...">
                            <div class="texto-slider text-center">
                                <h1>PABELLÓN DE ADMINISTRACIÓN DE EMPRESAS</h1>
                            </div> 
                        </li>
                        <li class="glide__slide">
                            <img src="public/img/slider/agro.JPG" class="" alt="...">
                            <div class="texto-slider text-center">
                                <h1>PABELLÓN DE INGENIERÍA AGROINDUSTRIAL</h1>
                            </div> 
                        </li>
                        <li class="glide__slide">
                            <img src="public/img/slider/epis.jpg" class="" alt="...">
                            <div class="texto-slider text-center">
                                <h1>PABELLÓN DE INGENIERÍA DE SISTEMAS</h1>
                            </div> 
                        </li> -->
                    </ul>
                </div>
        
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left color-primario" data-glide-dir="<"> < </button>
                    <button class="glide__arrow glide__arrow--right color-primario" data-glide-dir=">"> > </button>
                </div>
        
                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet color-secundario" data-glide-dir="=0"></button>
                    <button class="glide__bullet color-secundario" data-glide-dir="=1"></button> 
                    <!-- <button class="glide__bullet color-secundario" data-glide-dir="=2"></button> 
                    <button class="glide__bullet color-secundario" data-glide-dir="=3"></button>  -->
                </div>
            </div> 

        </section>

        <!-- ESCUELAS PROFESIONALES -->
        <section class="seccion-carreras py-2" id="carreras">
            <div class="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="glide-carreras sle-carrera">
                            <div data-glide-el="track" class="glide__track">
                                <ul class="glide__slides text-center">
                                    <li class="glide__slide">                            
                                        <a href="http://epis.unajma.edu.pe/" target="_blank" class="img-a">
                                            <img src="public/img/escuelas/sistmas.png" alt="" class="img-ani1">
                                        </a>
                                    </li>
                                    
                                    <li class="glide__slide">
                                        <a href="http://epia.unajma.edu.pe/" target="_blank" class="img-a">
                                            <img src="public/img/escuelas/agroin.png" alt="" class="img-ani3">
                                        </a>                            
                                    </li>
                                    <li class="glide__slide">
                                        <a href="http://www.unajma.edu.pe/content/carrera-profesional-ingenier%C3%AD-ambiental" target="_blank" class="img-a">
                                            <img src="public/img/escuelas/ambiental.png" alt="" class="img-ani1">
                                        </a>                            
                                    </li>
                                    <li class="glide__slide">
                                        <a href="http://www.unajma.edu.pe/content/escuela-profesional-de-contabilidad" target="_blank" class="img-a">
                                            <img src="public/img/escuelas/conta.png" alt="" class="img-ani2">
                                        </a>                            
                                    </li>
                                    <li class="glide__slide">
                                        <a href="http://www.unajma.edu.pe/content/escuela-profesional-de-educaci%C3%B3n-primaria-intercultural" target="_blank" class="img-a">
                                            <img src="public/img/escuelas/educación.png" alt="" class="img-ani3">
                                        </a>                            
                                    </li>

                                    <li class="glide__slide">
                                        <a href="http://fce.unajma.edu.pe/" target="_blank" class="img-a">
                                            <img src="public/img/escuelas/adminis.png" alt="" class="img-ani2">
                                        </a>                                                                    
                                    </li>
                                </ul>
                            </div>

                            <!-- <div class="glide__arrows" data-glide-el="controls">
                                <button class="glide__arrow glide__arrow--left" data-glide-dir="<"> < </button>
                                <button class="glide__arrow glide__arrow--right" data-glide-dir=">"> > </button>
                            </div>

                            <div class="glide__bullets" data-glide-el="controls[nav]">
                                <button class="glide__bullet color-secundario" data-glide-dir="=0"></button>
                                <button class="glide__bullet color-secundario" data-glide-dir="=1"></button>
                                <button class="glide__bullet color-secundario" data-glide-dir="=2"></button>
                                <button class="glide__bullet color-secundario" data-glide-dir="=3"></button>    
                                <button class="glide__bullet color-secundario" data-glide-dir="=4"></button>    
                                <button class="glide__bullet color-secundario" data-glide-dir="=5"></button>    
                            </div> -->
                        </div> 
                    </div>
                </div>
                <!-- .... -->
            </div>
        </section>

        <!-- ADMISION PRESENTACIÓN CEPRE -->


        <!-- CINTA MENU EXAMNE VIRTUAL -->
        <div class="cinta-menu py-5 text-center lead">
            <div class="container text-white">
                <div class="row text-center">
                    <div class="col-md-6">
                        <h3 class="py-2"> <span class="text-admision3">EL ÉXITO </span> DEPENDE DE TI</h3>
                        <p>El éxito depende de la preparación previa, y sin ella seguro que llega el fracaso.</p>
                        <br><p><h3>(<span class="text-admision3">CONFUCIO</span>)</h3></p>                        
                    </div>
                    <div class="col-md-6 icono-d">
                        <a href="https://examen.admisionunajma.pe/zetadmision/zet/index.php" class="text-white" target="_blank">
                            <i class="fas fa-laptop fa-6x"></i>
                            <h3 class="mt-3"> <span class="text-admision4">SISTEMA VIRTUAL UNAJMA</span> </h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ADMISION SECCION QUINTO DE SECUNDARIA  -->
        <section class="seccion-admision" id="admision2">
            <div class="container">
                <div class="col-md-12 seccion-1">
                    <a href="#">
                        CUENTA BANCO DE LA NACIÓN : <br>
                        00 182 00 9784 
                    </a>
                    <!-- <a href="#" class="">
                        SIMULACRO VIRTUAL ADMISIÓN UNAJMA - 2020
                    </a> -->
                </div>
                <div class="col-md-12 seccion-2">
                    <!-- <a href="https://admisionunajma.pe/zetadmision/zet/pre.php" target="_blank">INSCRIBETE AQUÍ</a> -->
                    <a href="#admision" class="btn-inscribete22 text-admision3"> 
                        INSCRIBETE AQUI <br>
                        (ORDINARIO) <br>
                        <small class="text-danger bold">(mantenimiento)</small>
                    </a>
                </div>
                <?php
                    // EXTRAORDINARIO TRASLADO
                    include_once("sections/modal-proceso-ordinario.html");
                    // MODAL EXTRAORDNIRIO  
                    // include_once("sections/modal-proceso-extraordinario.html");
                ?>

                <div class="col-md-12 seccion-3">
                    <div class="row">
                        <div class="col-6 txt-ins">
                            <a href="#admision" class="btn-inscribete21"> 
                                INSCRIBETE AQUI <br>
                                (CEPRE) <br>
                                <small class="text-warning bold">(cerrado)</small>
                            </a>
                        </div>
                        <?php
                            // MODAL CEPRE  
                            include_once("sections/modal-proceso-cepre.html");
                        ?>
                        <div class="col-6 txt-bcp gui-ins">
                            <a href="#admision2" class="btn-inscribete2">
                                INSCRIBETE AQUÍ <br>
                                (EXTRAORDINARIO) <br>
                                <small class="text-danger bold">(mantenimiento)</small>
                            </a>
                            <!-- <a href="https://admisionunajma.pe/consultatusdatos/" target="_blank">OBTENER DATOS DE POSTULANTE</a> -->
                            <!-- <a href="#">OBTENER DATOS DE POSTULANTE</a> -->
                        </div>
                        <?php
                            // MODAL
                            include_once("sections/modal-proceso-extraordinario.html");
                        ?>
                    </div>
                </div>
            </div>
            <div class="opaco-admision"></div>
        </section>



        <!-- CUERPO PAGINA -->
        <section>
            <div class="container cuerpo-pagina">
                <div class="row">
                    <div class="col-md-8 seccion-noticias">
                        
                        <div class="row">
                            <div class="col-md-12 noticia">
                                <!-- NOTICIAS -->
                                <div class="glide2 sle2">
                                    <div data-glide-el="track" class="glide__track">
                                    <ul class="glide__slides">
                                        <li class="glide__slide">
                                            <div class="card" style="width: 100%">
                                                <div class="card-body">
                                                    <img src="public/img/slider/administracion.JPG" class="card-img-top" alt="...">
                                                    <h5 class="card-title noticia-titulo">RESULTADOS EXAMEN ORDINARIO 2020-I</h5>
                                                    <p class="card-text noticia-parrafo">Examen desarrollado el __ de __ para las distintas escuelas profesionales con gran éxito.</p>
                                                    <a href="#" class="btn btn-noticia" data-toggle="modal" data-target="#noticia1_">ver más</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="glide__slide">
                                            <div class="card" style="width: 100%;">
                                                <div class="card-body">
                                                    <img src="public/img/slider/agro.JPG" class="card-img-top" alt="...">
                                                    <h5 class="card-title noticia-titulo">RESULTADOS EXAMEN EXTRAORDINARIO 2020-I</h5>
                                                    <p class="card-text noticia-parrafo">Examen desarrollado el __ de __ para las distintas escuelas profesionales con gran éxito.</p>
                                                    <a href="#" class="btn btn-noticia" data-toggle="modal" data-target="#noticia2_">ver más</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="glide__slide">
                                            <div class="card" style="width: 100%;">
                                                <div class="card-body">
                                                    <img src="public/img/epis.jpg" class="card-img-top" alt="...">
                                                    <h5 class="card-title noticia-titulo">RESULTADOS EXAMEN ORDINARIO 2019-II</h5>
                                                    <p class="card-text noticia-parrafo">Examen desarrollado el __ de __ para las distintas escuelas profesionales con gran éxito.</p>
                                                    <a href="#" class="btn btn-noticia"  data-toggle="modal" data-target="#noticia3_">ver más</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="glide__slide">
                                            <div class="card" style="width: 100%;">
                                                <div class="card-body">
                                                    <img src="public/img/epis.jpg" class="card-img-top" alt="...">
                                                    <h5 class="card-title noticia-titulo">RESULTADOS EXAMEN EXTRAORDINARIO 2019-II</h5>
                                                    <p class="card-text noticia-parrafo">Examen desarrollado el __ de __ para las distintas escuelas profesionales con gran éxito.</p>
                                                    <a href="#" class="btn btn-noticia" data-toggle="modal" data-target="#noticia4_">ver más</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="glide__slide">
                                            <div class="card" style="width: 100%;">
                                                <div class="card-body">
                                                    <img src="public/img/epis.jpg" class="card-img-top" alt="...">
                                                    <h5 class="card-title noticia-titulo">RESULTADOS EXAMEN ORDINARIO 2019-I</h5>
                                                    <p class="card-text noticia-parrafo">Examen desarrollado el __ de __ para las distintas escuelas profesionales con gran éxito.</p>
                                                    <a href="#" class="btn btn-noticia" data-toggle="modal" data-target="#noticia5_">ver más</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="glide__slide">
                                            <div class="card" style="width: 100%;">
                                                <div class="card-body">
                                                    <img src="public/img/epis.jpg" class="card-img-top" alt="...">
                                                    <h5 class="card-title noticia-titulo">RESULTADOS EXAMEN EXTRAORDINARIO 2019-I</h5>
                                                    <p class="card-text noticia-parrafo">Examen desarrollado el __ de __ para las distintas escuelas profesionales con gran éxito.</p>
                                                    <a href="#" class="btn btn-noticia" data-toggle="modal" data-target="#noticia6_">ver más</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="glide__slide">
                                            <div class="card" style="width: 100%;">
                                                <div class="card-body">
                                                    <img src="public/img/epis.jpg" class="card-img-top" alt="...">
                                                    <h5 class="card-title noticia-titulo">RESULTADOS EXAMEN PRIMERA SELECCIÓN 2019</h5>
                                                    <p class="card-text noticia-parrafo">Examen desarrollado el __ de __ para las distintas escuelas profesionales con gran éxito.</p>
                                                    <a href="#" class="btn btn-noticia" data-toggle="modal" data-target="#noticia7_">ver más</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    </div>

                                    <div class="glide__arrows" data-glide-el="controls">
                                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"> < </button>
                                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"> > </button>
                                    </div>

                                    <div class="glide__bullets" data-glide-el="controls[nav]">
                                        <button class="glide__bullet color-secundario" data-glide-dir="=0"></button>
                                        <button class="glide__bullet color-secundario" data-glide-dir="=1"></button>
                                        <button class="glide__bullet color-secundario" data-glide-dir="=2"></button>
                                        <button class="glide__bullet color-secundario" data-glide-dir="=3"></button>    
                                    </div>
                                </div> 

                                <!-- modal Noticias -->
                                <?php
                                    include_once('sections/modal-noticia.html');
                                ?>
                                <!-- FIN modal Noticias -->

                            </div>


                            <div class="col-md-12 comunicados seccion-comunicados" id="comunicados">

    <!-- MANUALES INSCRIPCIÓN -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Manual VIDEO</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Manual PDF.</a>
        </li>
    </ul>
    <div class="tab-content pt-1" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="card bg-dark text-white">
                <iframe class="" width="100%" height="410" src="https://www.youtube.com/embed/N7yxUvfPAL4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/fDdL3X2zkjU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            </div>
        </div>
        <div class="tab-pane fade text-center" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <iframe class="mx-auto" src="https://drive.google.com/file/d/11bm2443eQNa0cHuGca_eGpWXlVbkLU35/preview" width="100%" height="410" frameborder="0"></iframe>
            <!-- <iframe src="https://drive.google.com/file/d/1-DQd5R7puXdfUzYq08xW2XLrRtr5NIS9/preview" width="640" height="480"></iframe> -->
        </div>
    </div>
    <!-- FIN MANUALES INSCRIPCIÓN -->





                                <!-- COMUNICADOS -->
                                <!-- <div class="glide3 sle3">
                                    <div data-glide-el="track" class="glide__track">
                                    <ul class="glide__slides">
                                        <li class="glide__slide">
                                            <div class="card" style="width: 100%">
                                                <div class="card-body">
                                                    <img src="public/img/slider/agro.JPG" class="card-img-top" alt="...">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text noticia-parrafo">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor si</p>
                                                    <a href="#" class="btn btn-comunicado">ver mas</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="glide__slide">
                                            <div class="card" style="width: 100%;">
                                                <div class="card-body">
                                                    <img src="public/img/epis.jpg" class="card-img-top" alt="...">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text noticia-parrafo">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore incidunt optio cum dolores, sequi, cumque labore reprehenderit voluptas numquam, adipisci excepturi iusto. Esse inventore cum incidunt perferendis ducimus totam iure?</p>
                                                    <a href="#" class="btn btn-comunicado">ver mas</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="glide__slide">
                                            <div class="card" style="width: 100%;">
                                                <div class="card-body">
                                                    <img src="public/img/epis.jpg" class="card-img-top" alt="...">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text noticia-parrafo">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore incidunt optio cum dolores, sequi, cumque labore reprehenderit voluptas numquam, adipisci excepturi iusto. Esse inventore cum incidunt perferendis ducimus totam iure?</p>
                                                    <a href="#" class="btn btn-comunicado">ver mas</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="glide__slide">
                                            <div class="card" style="width: 100%;">
                                                <div class="card-body">
                                                    <img src="public/img/epis.jpg" class="card-img-top" alt="...">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text noticia-parrafo">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore incidunt optio cum dolores, sequi, cumque labore reprehenderit voluptas numquam, adipisci excepturi iusto. Esse inventore cum incidunt perferendis ducimus totam iure?</p>
                                                    <a href="#" class="btn btn-comunicado">ver mas</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    </div>
                            
                                    <div class="glide__arrows" data-glide-el="controls">
                                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"> < </button>
                                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"> > </button>
                                    </div>
                            
                                    <div class="glide__bullets" data-glide-el="controls[nav]">
                                        <button class="glide__bullet color-secundario" data-glide-dir="=0"></button>
                                        <button class="glide__bullet color-secundario" data-glide-dir="=1"></button>
                                        <button class="glide__bullet color-secundario" data-glide-dir="=2"></button>
                                        <button class="glide__bullet color-secundario" data-glide-dir="=3"></button>    
                                    </div>
                                </div>  -->
                            </div>
                        </div>
                        
                    </div>

                    <!-- REDES SOCIAL FACEBOOK -->
                    <div class="col-md-4 redes-social">
                        <!-- <iframe width="300" height="700" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FUNAJMAadmision%2F&tabs=timeline&width=300&height=700&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> -->

                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FUNAJMAadmision%2F&tabs=timeline&width=300&height=700&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="700" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>

                </div>
            </div>
        </section>


        <!-- AVISOS - FORMULARIOS-->
        <section class="seccion-avisos mt-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3">
                        <a href="#">
                            <span class="material-icons">
                                rule
                            </span>
                            <!-- <img src="public/img/iconos/rule.svg" alt="" class="material-icons"> -->
                            </br>
                            <h4 class="texto-a">Formulario de inscripción </h4>
                        </a>
                        <!-- <img src="public/img/boton-pre-inscripcion.png" alt="" class="img img-fluid "> -->
                    </div>
                    <div class="col-md-3">
                        <a href="#">
                            <span class="material-icons">
                                class
                            </span>
                            </br>
                            <h4 class="texto-a">Prospectos</h4>
                        </a>
                        <!-- <img src="public/img/prospectos.png" alt="" class="img img-fluid "> -->
                    </div>
                    <div class="col-md-3">
                        <a href="pagina_reglamento.php">
                            <span class="material-icons">
                                assignment_turned_in
                            </span>
                            </br>
                            <h4 class="texto-a">Reglamento</h4>
                        </a>
                        <!-- <img src="public/img/reglamento-admision3.png" alt="" class="img img-fluid "> -->
                    </div>
                    <div class="col-md-3">
                        <a href="pagina_temario.php">
                            <span class="material-icons">
                                batch_prediction
                            </span>
                            </br>
                            <h4 class="texto-a">Temario</h4>
                        </a>
                        <!-- <img src="public/img/temario.jpg" alt="" class="img img-fluid "> -->
                    </div>
                    <div class="col-md-12 py-4">
                        <!--<button class="btn btn-lg btn-outline-warning">VER TODOS LOS AVISOS</button>-->
                    </div>
                </div>
            </div>
        </section>

        <div class="">

            <!-- Button trigger modal -->
            <button type="button" class="btn-m-aviso" data-toggle="modal" data-target="#exampleModal">
                Cargado...
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Aviso Examen Ordinario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <!-- <img src="public/img/mpresencial2021.jpeg" class="card-img-top" alt="..."> -->
                    <h5 class="text-lead bold">COMUNICADO 005-2021-OCA-UNAJMA</h5>
                    <div class="text-justify px-3">
                        <br>
                        Como resultado del análisis de los reportes de salubridad en la provincia de Andahuaylas donde persiste las difíciles circunstancias de salubridad frente a la pandemia del COVID-19, así como de las coordinaciones realizadas con la Dirección de Salud Apurímac II – DISA II, <b>el examen de admisión ordinario presencial programado para el día sábado 8 de mayo queda suspendido</b>. La UNAJMA prioriza la salud y la vida de las personas.
                        <br><br>
                        Asimismo, se pone de conocimiento a los postulantes inscritos del examen de admisión ordinario presencial 2021-I que a través de un comunicado que <b>será remitido al correo electrónico que brindaron en su inscripción se les pondrá en conocimiento la nueva fecha del examen de admisión</b>.
                        <br><br>
                        Cabe mencionar que la Universidad Nacional José María Arguedas está en permanente <b>coordinación con la Dirección de Salud Apurímac II</b>, para que el examen presencial se realice en cumplimiento de las normas de bioseguridad emitidas por el Estado para afrontar la pandemia COVID-19.
                        <br><br>
                        Atentamente, 
                        <br>
                        Comisión Especial de Admisión
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
                </div>
            </div>
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


        <!-- MODAL INSCRIPCIONES 2021 PRESENCIAL -->
        <script>
            console.log("iniciando imoplementacion")
            let btnaviso = document.querySelector(".btn-m-aviso");
            if(false){ // el modal con el comunicado ya no está activo.
                setTimeout(() => {
                    btnaviso.click();
                    btnaviso.style.display = "none"
                }, 3000);

            }else {
                btnaviso.style.display = "none"
            }

        </script>

    </body>
</html>