
/*ESPERA A QUE EL CONTENIDO HTML CARGA Y DESPUES EJECUTA FUNCIONES  */
document.addEventListener('DOMContentLoaded',function(){

    eventListeners();

    darkMode();
});

/*ESTATE ATENTO POR SI CLICKEAN LA HAMBURGUESA  */
function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);

}

/*HAN HECHO CLICK ENTONCES EJECUTA TOOGLE , QUITAR O PONER CLASE MOSTRAR  */

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');

   navegacion.classList.toggle('mostrar');
}


function darkMode(){

    /*LEE LA CLASE CLASE DARK MODE */
    const botonDarkMode = document.querySelector('.dark-mode-boton');

    /* ESCUCHA POR UN CLICK Y APLICA LA FUNCION DE AGREGAR AL BODY LA CLASE dark-mode y o quitarla segun clickes*/

    botonDarkMode.addEventListener('click' ,function(){
    document.body.classList.toggle ('dark-mode');
    })

    /*PREFERENCIA NAVEGADOR PARA EL DARK MODE
     SI ES TRUE SIEMPRE VA ESTAR EN OSCURO  */

     const prefiereDarkMode = window.matchMedia('(prefers-color-scheme:dark)');

     if(prefiereDarkMode.matches){
         document.body.classList.add('dark-mode')
     }else{
         document.body.classList.remove('dark-mode')
     }
 
    /*Esta funciona hace que si el usuario cambia las preferencia del sistema a otro lo lea y la pagina cambie de modo automaticamente */
     prefiereDarkMode.addEventListener('change', function(){
        if(prefiereDarkMode.matches){
            document.body.classList.add('dark-mode')
        }else{
            document.body.classList.remove('dark-mode')
        }
     })

}