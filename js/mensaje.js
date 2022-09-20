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
function ConfirmacionRegistro(){
    var respuesta = confirm("¿estas seguro de registrar al cliente?");
    if(respuesta == true){
        return true;
    } else {
        return false;
    }
    
}
