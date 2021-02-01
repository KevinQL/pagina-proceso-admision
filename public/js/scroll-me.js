var servicios = new SmoothScroll('a[href*="#inicio"]', {
    speed: 700,
    offset: 100
});

var somos = new SmoothScroll('a[href*="#admision"]', {
    speed: 700,
    offset: 100
});

var servicios = new SmoothScroll('a[href*="#carreras"]', {
    speed: 700,
    offset: 100
});

var comunicados = new SmoothScroll('a[href*="#comunicados"]', {
    speed: 700,
    offset: 120
});

menuScrollPage()

/**
 * Verifica la URL para hacer el scroll. Esto siempre que cargue la página
 */
function menuScrollPage(){
    let URLactual = window.location.hash;

    if(URLactual !== "" && (URLactual === "#admision" || URLactual === "#inicio" || URLactual === "#carreras" || URLactual === "#comunicados" ) ){
        setTimeout(() => {
            let btsomos = document.querySelector(`a[href*="${URLactual}"]`);
            btsomos.click();
        }, 100);
    }
}