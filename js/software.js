function ocultar() {
        $(".cajaexterna").hide();
    }

function guardar(){
    var cadena = new FormData();
    var insti = $("#insti").val();
    var nombre = $("#nombre").val();
    var correo = $("#correo").val();
    var telefonos = $("#telefono").val();
    var correo = $("#correo").val();
    var mensaje = $("#mensaje").val();
    if(insti == 0 || nombre =='' || correo == '' || telefonos == '' ){
        alert("Debe ingresar todos los datos");
        return false;
    }
    cadena.append('insti', insti);
    cadena.append('nombre', nombre);
    cadena.append('telefonos', telefonos);
    cadena.append('correo', correo);
    cadena.append('mensaje', mensaje);
    cadena.append('software', 'gesaodin');
    $('#cargando').html('<img src="images/loading.gif"/>');
    $(".cajaexterna").show();
    $.ajax({
        url : "solicitarSoftware.php",
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
    $("#insti").val('');
    $("#nombre").val('');
    $("#correo").val('');
    $("#telefono").val('');
    $("#correo").val('');
    $("#mensaje").val('');
}

function guardar2(){
    var cadena = new FormData();
    var insti = $("#instiM").val();
    var nombre = $("#nombreM").val();
    var correo = $("#correoM").val();
    var telefonos = $("#telefonoM").val();
    var correo = $("#correoM").val();
    var mensaje = $("#mensajeM").val();
    if(insti == 0 || nombre =='' || correo == '' || telefonos == '' ){
        alert("Debe ingresar todos los datos");
        return false;
    }
    cadena.append('insti', insti);
    cadena.append('nombre', nombre);
    cadena.append('telefonos', telefonos);
    cadena.append('correo', correo);
    cadena.append('mensaje', mensaje);
    cadena.append('software', 'medida');
    $('#cargando').html('<img src="images/loading.gif"/>');
    $(".cajaexterna").show();
    $.ajax({
        url : "solicitarSoftware.php",
        type : 'POST',
        data : cadena,
        contentType : false,
        processData : false,
        cache : false,
        success : function(msj) {
           
            limpiar2();
            $('#cargando').html('<div class="banner-top"><h1>'+msj+'</h1></div><div class="cerrar"><a href="#" onclick="ocultar();" class="cerrarmodal">Cerrar</a></div>');
            //$(".cajaexterna").hide();
        }
    });
    return false;
}

function limpiar2(){
    $("#instiM").val('');
    $("#nombreM").val('');
    $("#correoM").val('');
    $("#telefonoM").val('');
    $("#correoM").val('');
    $("#softwareM").val('');
}