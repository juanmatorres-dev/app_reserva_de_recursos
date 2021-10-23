/**
 * Confirmación de borrado de datos
 */


var enlacesBorrar = document.getElementsByClassName("confirmacion");

//alert(enlacesBorrar[0]);


for (let i = 0; i < enlacesBorrar.length; i++) {
    enlacesBorrar[i].addEventListener('click', function(e) {

        var confirmacion = confirm("¿ Borrar recurso ?");

        if (!confirmacion) { // No borrar la película
            e.preventDefault(); // Detiene la ejecución del enlace (no va al sitio correspondiente)
        }
    });

}