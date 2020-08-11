//let a =  new Glide('.glide').mount({ Controls, Breakpoints });

//Para el slider de la página principal
let div_slider = document.querySelector(".slider");
if(div_slider){
    let b = new Glide('.glide', {
        type: 'carousel',
        startAt: 0,
        focusAt:'center',
        perView: 1,
        gap:2,
        autoplay: 3600,
        hoverpause: true,
        breakpoints: { //para el tamaño de pantalla
            480:{perView: 1},
            800:{perView:2}
        }   
    });
    b.mount()
}

// Para las carreras logo

let div_carreras = document.querySelector(".glide-carreras");
if(div_carreras){
    let d = new Glide('.glide-carreras', {
        type: 'carousel',
        startAt: 0,
        focusAt:'center',
        perView: 6,
        gap:1,
        autoplay: 5000,
        hoverpause: true,
        breakpoints: { //para el tamaño de pantalla
            480:{perView: 2},
            800:{perView:3}
        }   
    });
    d.mount()
}

//para el slider la seccion de noticias
let div_noticia = document.querySelector(".seccion-noticias");
if(div_noticia){
    let c = new Glide('.glide2', {
        type: 'carousel',
        startAt: 0,
        focusAt:'center',
        perView: 3,
        gap:1,
        autoplay: 3000,
        hoverpause: true,
        breakpoints: { //para el tamaño de pantalla
            480:{perView: 1},
            800:{perView:2}
        }   
    });
    c.mount()
}

//para el slider la seccion de COMUNICADOS
let div_comunicados = document.querySelector(".seccion-comunicados");
if(div_noticia){
    let c = new Glide('.glide3', {
        type: 'carousel',
        startAt: 0,
        focusAt:'center',
        perView: 1,
        gap:1,
        autoplay: 3000,
        hoverpause: true,
        breakpoints: { //para el tamaño de pantalla
            480:{perView: 1},
            800:{perView:2}
        }   
    });
    c.mount()
}