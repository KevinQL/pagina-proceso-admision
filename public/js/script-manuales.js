// alert("prueba de archivo")
function cerrar_modal(){   
    //cierra el modal de indicaciones de inscripcion    
    let cerrar = document.querySelector(".swal2-close");
    cerrar.click();
    //capaz redirecciona a la sección de comunicados / MANUALES
    let btn_comu = document.querySelector(".btn-comunicaciones");
    btn_comu.click();
    // var win = window.open('https://admisionunajma.pe/index.php#comunicados', '_blank');    
}