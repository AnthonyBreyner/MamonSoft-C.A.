function ocultar() {
        $(".cajaexterna").hide();
    }

function guardar(){
    var cadena = new FormData();
    var nombres = $("#nombres").val();
    var cedula = $("#cedula").val();
    var correo = $("#correo").val();
    var telefono = $("#telefono").val();
    var mensaje = $("#mensaje").val();
    if(nombres =='' || cedula=='' || correo == '' || telefono == '' ){
        alert("Debe ingresar todos los datos");
        return false;
    }
    cadena.append('nombres', nombres);
    cadena.append('cedula', cedula);
    cadena.append('correo', correo);
    cadena.append('telefono', telefono);
    cadena.append('mensaje', mensaje);
    $('#cargando').html('<img src="images/loading.gif"/>');
    $(".cajaexterna").show();
    $.ajax({
        url : "contacto.php",
        type : 'POST',
        data : cadena,
        contentType : false,
        processData : false,
        cache : false,
        success : function(msj) {
           
            limpiar();
           $('#cargando').html('<div class="banner-top"><h1>'+msj+'</h1></div><div class="cerrar"><a href="#" onclick="ocultar();" class="cerrarmodal">Cerrar</a></div>');
           //$(".cajaexterna").hide();
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

