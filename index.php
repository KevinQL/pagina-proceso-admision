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

        <title>Unajma admisión 2022-1</title>
    </head>
    
    <body>

        <!-- LOADER... -->
        <section class="contain-loader">
            <div class="loader">
                <span></span>
                <span></span>
                <span></span>
                <img src="public/img/logo_u.ico" alt="" height="95px">            
                <small>admisión</small>
                <h2>..CARGANDO..</h2>
            </div>
        </section>


        <!-- SECTION ANUNCIO CEPRE 
        <section class="contain-cepre">
            <span class="contain-close" onclick="closeAnuncioCepre(true)">Cerrar</span>
            <div class="contain-img"> -->
                <!-- div container cepre 
                <img src="./public/img/cepre.jpeg" alt="cepre">
            </div>
        </section>-->
            <!-- contenedor anuncio CEPRE 
            <section class="c-anuncio-cepre">
                <img src="./public/img/cepre.jpeg" alt="cepre" onclick="closeAnuncioCepre(false)">
                <span>ANUNCIO CEPRE</span>
            </section>-->
           

        <!-- SECTION NUMBER BANK -->
        <section class="contain-bank">
            <div>
                CUENTA BANCO DE LA NACIÓN: 
                <span class="text">00 182 00 9784</span>
                <label class="btn-bx">X</label>
            </div>
        </section>




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
                            <img src="public/img/slider/2022-1/ps1.jpg" class="" alt="...">
                            <div class="texto-slider text-center">
                                <h1 class="display-4 bold"> <!-- d-md-none  -->
                                    <span class="">
                                        <span class="text-sh1">PROCESO</span> 
                                        <span class="text-admision text-sh2">DE ADMISIÓN</span>
                                        <br>
                                        <span class="text-sh1">2022 - 1</span>
                                        <BR><span class="text-admision text-sh2">ORDINARIO:08 Y 09 DE ABRIL</span> </BR>
                                    </span>
                                    <br>
                                    <a href="index.php#admision2" class="btn btn-light btn-lg mt-4 py-3 px-5 txt-btn-inscr bold">
                                        INSCRIPCIONES ABIERTAS
                                        <br>
                                        <i class="fas fa-diagnoses"></i> 
                                        <span class="">(click aquí)</span>
                                        <i class="fas fa-diagnoses"></i> 
                                    </a>
                                </h1>
                            </div>  
                        </li>
                        <li class="glide__slide">
                            <!-- <img src="public/img/slider/admision_f.jpg" class="" alt="..."> -->
                            <img src="public/img/slider/2022-1/ps2.jpg" class="" alt="...">
                            <div class="texto-slider text-center">
                                <h1 class="display-4 bold"> <!-- d-md-none  -->
                                    <span class="">
                                        <span class="text-sh1">PROCESO</span> 
                                        <span class="text-admision text-sh2">DE ADMISIÓN</span>
                                        <br>
                                        <span class="text-sh1">2022 - 1</span>
                                        <BR><span class="text-admision text-sh2">EXTRAORDINARIO: 26 DE MARZO</span> </BR>
                                    </span>
                                    <br>
                                    <a href="index.php#admision2" class="btn btn-light btn-lg mt-4 py-3 px-5 txt-btn-inscr bold">
                                        INSCRIPCIONES ABIERTAS
                                        <br>
                                        <i class="fas fa-diagnoses"></i> 
                                        <span class="">(click aquí)</span>
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
                        <h3 class="py-2"> <span class="text-admision3">
                            EL ÉXITO </span> DEPENDE DE TI
                        </h3>
                        <img src="./public/img/iconos/success.png" width="10%" alt="">
                        <div class="lead ktext-parrafo">
                            El éxito depende de la preparación previa, y sin ella seguro que llega el fracaso.
                        </div>
                        <small><span class="text-admision3">(CONFUCIO)</span></small>                     
                    </div>
                    <div class="col-md-6 icono-d">
                        <a href="https://examen.admisionunajma.pe/zetadmision/zet/index.php" class="text-white" target="_blank">
                            <img src="./public/img/iconos/operating-system.png" width="40%" alt="">
                            <!-- <i class="fas fa-laptop fa-6x"></i> -->
                            <h4 class="mt-3"> 
                                <span class="text-admision4">SISTEMA INSCRIPCIÓN ADMISIÓN</span>
                            </h4>
                            <small class=""> </small>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ADMISION SECCION QUINTO DE SECUNDARIA  -->
        <section class="seccion-admision py-5" id="admision2">
            <div class="container">
                <div class="col-md-12 seccion-1"> 
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-laptop" width="200" height="200" viewBox="0 0 24 24" stroke-width="2" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <line x1="3" y1="19" x2="21" y2="19" />
                    <rect x="5" y="6" width="14" height="10" rx="1" />
                    </svg>
                    <!-- <a href="#" class="">
                        CUENTA BANCO DE LA NACIÓN : 
                        <br>
                            <i class="fa fa-credit-card-alt text-secondary" aria-hidden="true"></i> 
                            00 182 00 9784
                    </a> -->
                    <!-- <a href="#admision" class="btn-inscribete20 text-admision3"> 
                        INSCRÍBETE AQUÍ <br>
                        (PRIMERA SELECCIÓN) <br>
                        <small class="text-warning bold">
                        <small class="text-danger bold">
                        <small class="text-success bold">
                            ( 
                                CERRADO
                                <i class="fa fa-window-close" aria-hidden="true"></i>
                                <i class="fa fa-external-link-square" aria-hidden="true"></i>  
                            )   
                        </small>
                    </a> -->
                    <!-- <a href="#" class="">
                        SIMULACRO VIRTUAL ADMISIÓN UNAJMA - 2020
                    </a> -->
                </div> 
               <?php
                    // EXTRAORDINARIO TRASLADO
                    /* include_once("sections/modal-proceso-pseleccion.html"); */
                    // MODAL EXTRAORDNIRIO  
                    // include_once("sections/modal-proceso-extraordinario.html");
                ?> 
                <div class="col-md-12 seccion-2">
                    <!-- <a href="https://admisionunajma.pe/zetadmision/zet/pre.php" target="_blank">INSCRIBETE AQUÍ</a> -->
                    <a href="#admision" class="btn-inscribete22 text-admision3"> 
                        INSCRÍBETE AQUÍ <br>
                        (ORDINARIO) <br>
                        <!-- <small class="text-warning bold"> -->
                        <!-- <small class="text-danger bold"> -->
                        <small class="text-success bold">
                            ( 
                                DISPONIBLE
                                <!-- <i class="fa fa-window-close" aria-hidden="true"></i> -->
                                <i class="fa fa-external-link-square" aria-hidden="true"></i>  
                            )   
                        </small>
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
                            <a href="#admision" class="btn-inscribete21 text"> 
                                INSCRÍBETE AQUÍ <br>
                                (CEPRE) <br>
                                    <small class="text-warning bold">
                                    <!-- <small class="text-danger bold"> -->
                                    <!-- <small class="text-success bold"> -->
                                    (
                                        PENDIENTE
                                        <i class="fa fa-window-close" aria-hidden="true"></i>
                                        <!-- <i class="fa fa-external-link-square" aria-hidden="true"></i>   -->
                                    )
                                </small>
                            </a>
                        </div>
                        <?php
                            // MODAL CEPRE  
                            include_once("sections/modal-proceso-cepre.html");
                        ?>
                        <div class="col-6 txt-bcp gui-ins">
                            <a href="#admision2" class="btn-inscribete2">
                                INSCRÍBETE AQUÍ <br>
                                (EXTRAORDINARIO) <br>
                                    <!-- <small class="text-warning bold"> -->
                                    <!-- <small class="text-danger bold"> -->
                                    <small class="text-success bold">
                                    ( 
                                        DISPONIBLE
                                        <!-- <i class="fa fa-window-close" aria-hidden="true"></i>                                       -->
                                        <i class="fa fa-external-link-square" aria-hidden="true"></i>
                                    )
                                </small>
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
        <section class="seccion-cuerpo">
            <div class="container cuerpo-pagina">
                <div class="row pt-4">
                    <div class="col-md-8 seccion-noticias">
                        
                        <div class="row">
                            
                            <div class="col-md-12 comunicados seccion-comunicados" id="comunicados">

                                <!-- MANUALES INSCRIPCIÓN -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active font-weight-bold" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                            <small class="text-danger text-bold text-right">(click)</small> <br>
                                            MANUAL VIDEO 
                                            <i class="fa fa-youtube text-danger" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-bold" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                            <small class="text-danger text-bold">(click)</small>
                                            <br>
                                            MANUAL PDF 
                                            <i class="fa fa-file-pdf-o text-secondary" aria-hidden="true"></i>
                                        </a> 
                                    </li>
                                </ul>
                                <div class="tab-content pt-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card bg-dark text-white">
                                            <!-- <iframe class="" width="100%" height="410" src="https://www.youtube.com/embed/N7yxUvfPAL4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                            <!--<iframe width="100%" height="410" src="https://www.youtube.com/embed/6gkC9VvA1yY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                                            <iframe width="100%" height="410" src="https://www.youtube.com/embed/7xfoN10bywg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/fDdL3X2zkjU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                        </div>
                                    </div>
                                    <div class="tab-pane fade text-center" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <iframe class="mx-auto" src="https://drive.google.com/file/d/11bm2443eQNa0cHuGca_eGpWXlVbkLU35/preview" width="100%" height="410" frameborder="0"></iframe>
                                        <!-- <iframe src="https://drive.google.com/file/d/1-DQd5R7puXdfUzYq08xW2XLrRtr5NIS9/preview" width="640" height="480"></iframe> -->
                                    </div>
                                </div>
                                <!--****** FIN MANUALES INSCRIPCIÓN -->


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



                            <div class="col-md-12 pt-5 noticia">
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
                            <h4 class="texto-a">Formulario de inscripción docente</h4>
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


            // loader display none update 2021-3
            window.onload = function() {
                let contain_loader = document.querySelector(".contain-loader");
                contain_loader.style.transform = "translateX(-100%)" 

                // cinta de cuenta de banco de la nación 
                let contBank = document.querySelector(".contain-bank")
                let btn_contBank = document.querySelector(".btn-bx");
                setTimeout(() => {
                    
                    btn_contBank.onclick = function() {
                        contBank.classList.toggle("active");
                    }

                    btn_contBank.click();

                }, 4000);

                
            }


            // Anuncio CEPRE
            function closeAnuncioCepre(action){
                let containCepre = document.querySelector(".contain-cepre");
                if(action){
                    containCepre.style.display = "none";
                }else{
                    containCepre.style.display = "block";
                }
            }

        </script>

    </body>
</html>