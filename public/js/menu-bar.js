menu_barra_responsive()
function menu_barra_responsive(){
    let menu_barra = document.querySelector(".menu-bar");
    let navegacion = document.querySelector(".navegacion");
    if(menu_barra){
        let bol_menu = true;
        menu_barra.addEventListener('click',function(){
            if(bol_menu){
                navegacion.style.display = "block";
            }else{
                navegacion.style.display = "none";
            }
            bol_menu = !bol_menu;
        })
    }
}