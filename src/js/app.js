
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

function darkMode() {
    const botonDarkMode = document.querySelector('.dark-mode-boton');

    // Función para cambiar el modo entre claro y oscuro
    function toggleDarkMode() {
        document.body.classList.toggle('dark-mode');
        // Guardar el estado del modo oscuro en el almacenamiento local
        const isDarkMode = document.body.classList.contains('dark-mode');
        localStorage.setItem('darkMode', JSON.stringify(isDarkMode));
    }

    botonDarkMode.addEventListener('click', toggleDarkMode);

    // Obtener el estado del modo oscuro del almacenamiento local al cargar la página
    const storedDarkMode = localStorage.getItem('darkMode');
    if (storedDarkMode !== null) {
        const isDarkMode = JSON.parse(storedDarkMode);
        if (isDarkMode) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    }

    // Escuchar cambios en las preferencias de color del sistema
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
    prefiereDarkMode.addEventListener('change', function () {
        if (prefiereDarkMode.matches) {
            document.body.classList.add('dark-mode');
            // Guardar el estado del modo oscuro en el almacenamiento local
            localStorage.setItem('darkMode', JSON.stringify(true));
        } else {
            document.body.classList.remove('dark-mode');
            // Guardar el estado del modo oscuro en el almacenamiento local
            localStorage.setItem('darkMode', JSON.stringify(false));
        }
    });
}

