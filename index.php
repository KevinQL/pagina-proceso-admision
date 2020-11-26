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
                                <h1 class="d-md-none"> 
                                    EXAMÉN DE ADMISIÓN - 2020
                                    <br>
                                    <a href="index.php#admision" class="btn btn-outline-light btn-lg d-md-none"><i class="fas fa-diagnoses"></i> VER MÁS </a>
                                </h1>
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
                    <a href="https://examen.admisionunajma.pe/zetadmision/zet/index.php">
                        EXAMEN VIRTUAL ADMISIÓN UNAJMA 2020
                    </a>
                    <!-- <a href="#" class="">
                        SIMULACRO VIRTUAL ADMISIÓN UNAJMA - 2020
                    </a> -->
                </div>
                <div class="col-md-12 seccion-2">
                    <!-- <a href="https://admisionunajma.pe/zetadmision/zet/pre.php" target="_blank">INSCRIBETE AQUÍ</a> -->
                    <a href="#admision" class="btn-inscribete">INSCRIBETE AQUÍ</a>
                </div>

<!-- MODAL PRÁCTICA -->
    <!-- modificar esta seccion -->
    <div class="d-none modal-inscripcion">
        <h1 class="txtm-titulo">
            <strong class='txtm-titulo'>IMPORTANTE</strong>
        </h1>

        <div class="txt ">
            <h4 class="txt-titulo">
                El postulante debe de contar con los siguientes requisitos:
            </h4>
            <ul class="text-left txt-indicaciones">
                <li>Computadora de escritorio con: cámara, micrófono y salida de audio(parlantes) o computadora portátil(laptop) con sus componentes en correcto funcionamiento.</li>
                <li>Internet con un mínimo de 4Mbps de velocidad estable y 8 Mbps recomendable.</li>
                <li>Un ambiente privado y que no exista interrupciones o personas distintas que no sea postulante.</li>
                <li>Un Smartphone o teléfono inteligente con conexión a internet a través de datos móviles con el aplicativo de google meet instalado además de batería en buen estado con una duración mínima de 3 horas para el control durante el examen.</li>
                <li>Correo electrónico Gmail.</li>
                <li>El postulante debe conocer el reglamento de admisión, Si aún no lo reviso hacer clic <a href="pagina_reglamento.php" class="txt-danger" target="_blank">aquí</a></li>
                <li>El postulante debe cumplir con los requisitos documentarios necesarios dependiendo a la modalidad que se presenta, Si aún no lo reviso hacer clic <a href="pagina_extraordinario.php" class="txt-danger" target="_blank">aquí</a></li>
                <li>Tener en cuenta los manuales para no tener incovenientes <a href="index.php#comunicados" onclick="cerrar_modal()">ver aquí</a></li>
            </ul>

            <a href="https://examen.admisionunajma.pe/zetadmision/zet/pre.php" target="_blank" class="btn btn-sm btn-info">
                ACEPTO Y CONTINUAR
            </a> 
            <!-- <a href="#admision" class="btn btn-sm btn-info">
                ACEPTO Y CONTINUAR
            </a>  -->

<!-- modal dropdown tarifario -->
<div class="accordion my-2" id="accordionExample">
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    TARIFARIO ADMISIÓN <i class="fas fa-angle-down ml-1"></i>
                </button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ÍTEM</th>
                            <th scope="col">DESCRIPCIÓN</th>
                            <th scope="col">DERECHO DE TRÁMITE</th>                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Examen ordinario egresado de colegio nacional</td>
                            <td>S/. 210.00</td>                        
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Examen ordinario egresado de colegio particular</td>
                            <td>S/. 245.00</td>                        
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Por 1° y 2° puesto egresado de colegio nacional</td>
                            <td>S/. 200.00</td>                        
                        </tr>

                        <tr>
                            <th scope="row">4</th>
                            <td>Por 1° y 2° puesto egresado de colegio particular</td>
                            <td>S/. 235.00</td>                        
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Tercio Superior egresados de colegio nacional</td>
                            <td>S/. 200.00</td>                        
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Tercio Superior egresados de colegio particular</td>
                            <td>S/. 235.00</td>                        
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Deportista de Alto Nivel egresado de colegio nacional</td>
                            <td>S/. 200.00</td>                        
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Deportista de Alto Nivel egresado de colegio particular</td>
                            <td>S/. 235.00</td>                        
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Víctima del Terrorismo egresado del colegio nacional</td>
                            <td>S/. 165.00</td>                        
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>Víctima del Terrorismo egresado del colegio particular </td>
                            <td>S/. 175.00</td>                        
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>Personas con Discapacidad egresado del colegio nacional</td>
                            <td>S/. 165.00</td>                        
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td>Personas con Discapacidad egresado del colegio particular</td>
                            <td>S/. 175.00</td>                        
                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td>Becas VRAEM egresado del colegio nacional </td>
                            <td>S/. 165.00</td>                        
                        </tr>
                        <tr>
                            <th scope="row">14</th>
                            <td>Becas VRAEM egresado del colegio particular</td>
                            <td>S/. 175.00</td>                        
                        </tr>
                        <tr>
                            <th scope="row">15</th>
                            <td>Graduados, Titulados y miembros de las Fuerzas Armadas </td>
                            <td>S/. 535.00</td>                        
                        </tr>
                        <tr>
                            <th scope="row">16</th>
                            <td>Derecho por Traslado externo</td>
                            <td>S/. 725.00</td>                        
                        </tr>
                        <tr>
                            <th scope="row">17</th>
                            <td>Derecho por Traslado Interno </td>
                            <td>S/. 275.00</td>                        
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


        </div>
    </div>

    <!-- script modal sweet -->
    <script>
        let titulo = document.querySelector(".txtm-titulo").innerHTML
        let msj = document.querySelector(".txt").innerHTML;
        let btn_inscribete = document.querySelector(".btn-inscribete");

        btn_inscribete.addEventListener('click',function(e){
            // e.preventDefault();
            Swal.fire({
                title: `<strong class='txt-titulo'>${titulo}</strong>`,
                icon: 'info',
                html: `${msj}`,
                showCloseButton: true,
                showConfirmButton: false,
                showCancelButton: false,
            })    
        });
    </script>
<!-- FIN MODAL INSCRIBETE -->

                <div class="col-md-12 seccion-3">
                    <div class="row">
                        <div class="col-6 txt-ins">
                            <a href="https://forms.gle/9VoFvf9EETjuh4Cf8" target="_blank"> INSCRIPCIÓN DOCENTE </a>
                        </div>
                        <div class="col-6 txt-bcp"gui-ins>
                            <a href="#admision"> 
                                CUENTA BANCO DE LA NACIÓN : <br>
                                00 182 00 9784 
                            </a>
                            <!-- <a href="https://admisionunajma.pe/consultatusdatos/" target="_blank">OBTENER DATOS DE POSTULANTE</a> -->
                            <!-- <a href="#">OBTENER DATOS DE POSTULANTE</a> -->
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
                <iframe class="" width="100%" height="410" src="https://www.youtube.com/embed/CYnlNi-3okg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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