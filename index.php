<!doctype html>
<html lang="en">
    <head>
        
        <!-- HEADER CDNS -->
        <?php
            require_once('partials/cdnsHeader.html');
        ?>

        <title>Unajma admisión 2020 </title>
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
                            <img src="public/img/admision.jpg" class="" alt="...">
                            <div class="texto-slider text-center">
                                <h1></h1>
                            </div>  
                        </li>
                        <li class="glide__slide">
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
                        </li>
                    </ul>
                </div>
        
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left color-primario" data-glide-dir="<"> < </button>
                    <button class="glide__arrow glide__arrow--right color-primario" data-glide-dir=">"> > </button>
                </div>
        
                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet color-secundario" data-glide-dir="=0"></button>
                    <button class="glide__bullet color-secundario" data-glide-dir="=1"></button> 
                    <button class="glide__bullet color-secundario" data-glide-dir="=2"></button> 
                    <button class="glide__bullet color-secundario" data-glide-dir="=3"></button> 
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

        <!-- CINTA MENU EXAMNE VIRTUAL -->
        <div class="cinta-menu py-5 text-center lead">
            <div class="container text-white">
                <div class="row text-center">
                    <div class="col-md-6">
                        <h3 class="py-2">EL ÉXITO DEPENDE DE TI</h3>
                        <p>Cualquier persona que deja de aprender es viejo, ya sea a los veinte u ochenta. Cualquier persona que sigue aprendiendo se mantiene joven. La cosa más grande en la vida es mantener la mente joven.</p>
                        <br><p>Henry Ford</p>                        
                    </div>
                    <div class="col-md-6 icono-d">
                        <i class="fas fa-laptop fa-6x"></i>
                        <h3>SISTEMA VIRTUAL UNAJMA</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- ADMISION PRESENTACIÓN -->
        <section class="seccion-admision" id="admision">
            <div class="container">
                <div class="col-md-12 seccion-1">
                    <a href="#" class="">
                        SIMULACRO VIRTUAL ADMISIÓN UNAJMA - 2020
                    </a>
                </div>
                <div class="col-md-12 seccion-2">
                    <a href="#">INSCRIBITE AQUÍ</a>
                </div>
                <div class="col-md-12 seccion-3">
                    <div class="row">
                        <div class="col-6">
                            <a href="#">GUIAS DE INSCRIPCIÓN</a>
                        </div>
                        <div class="col-6">
                            <a href="#">GUÍA DE PAGO EN AGENTE BCP</a>
                        </div>
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

                            <div class="col-md-12 comunicados">
                                <!-- COMUNICADOS -->
                                <div class="glide3 sle3">
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
                                            <!-- <div class=" card-noticia">
                                                <div class="borde-noticia">
                                                    <img src="public/img/epis.jpg" alt="" class="img-noticia">
                                                    <h4 class="px-2">Lorem, ipsum dolor.</h4>
                                                    <p class="px-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit...
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae totam cumque soluta provident sit, iusto iste labore, quas ipsum nobis mollitia impedit facilis et animi quae. Nostrum nesciunt velit dolore?
                                                    </p>
                                                    <a href="?pg=noticia&id=4" class="btn btn-sm">VER MAS</a>
                                                </div>
                                            </div> -->
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

                            </div>
                        </div>
                        <!-- <h1 class="text-center">NOTICIA</h1> -->
                        
                    </div>

                    <!-- REDES SOCIAL FACEBOOK -->
                    <div class="col-md-4 redes-social">
                        <iframe width="300" height="700" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FUNAJMAadmision%2F&tabs=timeline&width=300&height=700&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
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
                        <a href="#">
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