function ConfirmacionEliminacion() {
    var respuesta = confirm("¿estas seguro de eliminar al cliente?");
    if (respuesta == true) {
        return true;
    } else {
        return false;
    }
}
function ConfirmacionModificar() {
    var respuesta = confirm("¿estas seguro de modificar?");
    if (respuesta == true) {
        return true;
    } else {
        return false;
    }
}