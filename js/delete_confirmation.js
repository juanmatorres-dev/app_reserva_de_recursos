/**
 * Confirmación de borrado de datos
 */


var enlacesBorrar = document.getElementsByClassName("confirmacion");
var tipoDeContenido = document.getElementById("type_of_content");
var tipoDeContenido_enTexto = tipoDeContenido.innerHTML; // Extrae el contenido de la etiqueta HTML
var mensajePersonalizadoDeBorrado = "";

//alert(enlacesBorrar[0]);


//alert(tipoDeContenido.innerHTML);

switch (tipoDeContenido_enTexto) {
  case "resources":
    mensajePersonalizadoDeBorrado = "recurso";
    break;
  case "timeslots":
    mensajePersonalizadoDeBorrado = "tramo horario";
    break;
  case "users":
    mensajePersonalizadoDeBorrado = "usuario";
    break;
  default:
    break;
}

for (let i = 0; i < enlacesBorrar.length; i++) {
    enlacesBorrar[i].addEventListener('click', function(e) {

        var confirmacion = confirm("¿ Borrar " + mensajePersonalizadoDeBorrado  + " ?");

        if (!confirmacion) { // No borrar la película
            e.preventDefault(); // Detiene la ejecución del enlace (no va al sitio correspondiente)
        }
    });

}