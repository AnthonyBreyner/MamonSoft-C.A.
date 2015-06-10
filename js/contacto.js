function guardar(){
    var cadena = new FormData();
    var nombres = $("#nombres").val();
    var cedula = $("#cedula").val();
    var correo = $("#correo").val();
    var telefono = $("#telefono").val();
    var mensaje = $("#mensaje").val();
    if(nombre =='' || cedula=='' || correo == '' || telefonos == '' ){
        alert("Debe ingresar todos los datos");
        return false;
    }
    cadena.append('nombres', nombres);
    cadena.append('cedula', cedula);
    cadena.append('correo', correo);
    cadena.append('telefono', telefono);
    cadena.append('mensaje', mensaje);
    $.ajax({
        url : "contacto.php",
        type : 'POST',
        data : cadena,
        contentType : false,
        processData : false,
        cache : false,
        success : function(msj) {
            alert(msj);
            limpiar();
        }
    });
    return false;
}

function limpiar(){
    $("#nombres").val('');
    $("#cedula").val('');
    $("#correo").val('');
    $("#telefono").val('');
    $("#mensaje").val('');
}

