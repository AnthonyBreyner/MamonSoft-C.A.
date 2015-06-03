function cursos(){
    $.ajax({
        url : 'cursosJson.php',
        dataType : 'JSON',
        success : function(json) {//alert(json);
            $.each(json, function(item, valor) {
                $("#lista_cursos").append(new Option(valor, item, false, true));
            });
            $("#lista_cursos").append(new Option('Seleccion Curso',0, false, true));
        }
    });
}

function mostrarCurso(){
    var id = $("#lista_cursos").val();
    var tit = $("#lista_cursos option:selected").text();
    $.ajax({
        url : 'datosCurso.php',
        data: "id="+id,
        type: 'POST',
        success : function(resp) {//alert(resp);
            $("#titulo").html(tit);
            $("#descripcion").html(resp);
        }
    });
}

function nivel(){
    $.ajax({
        url : 'nivelJson.php',
        dataType : 'JSON',
        success : function(json) {//alert(json);
            $.each(json, function(item, valor) {
                $("#nivel").append(new Option(valor, item, false, true));
            });
            $("#nivel").append(new Option('Seleccion Nivel Academico',0, false, true));
        }
    });
}

function ocupa(){
    $.ajax({
        url : 'ocupaJson.php',
        dataType : 'JSON',
        success : function(json) {//alert(json);
            $.each(json, function(item, valor) {
                $("#ocupacion").append(new Option(valor, item, false, true));
            });
            $("#ocupacion").append(new Option('Seleccion Ocupacion',0, false, true));
        }
    });
}

function profe(){
    $.ajax({
        url : 'profeJson.php',
        dataType : 'JSON',
        success : function(json) {//alert(json);
            $.each(json, function(item, valor) {
                $("#profesion").append(new Option(valor, item, false, true));
            });
            $("#profesion").append(new Option('Seleccion Profesion',0, false, true));
        }
    });
}

function guardar(){
    var cadena = new FormData();
    var curso = $("#lista_cursos").val();
    var nombres = $("#nombres").val();
    var apellidos = $("#apellidos").val();
    var telefonos = $("#telefonos").val();
    var correo = $("#correo").val();
    var ocupacion = $("#ocupacion").val();
    var profesion = $("#profesion").val();
    var nivel = $("#nivel").val();
    var cedula = $("#cedula").val();
    var observacion = $("#observacion").val();
    if(curso == 0 || nombres =='' || apellidos == '' || telefonos == '' || correo == '' || ocupacion == 0 || profesion == 0 || nivel == 0 || cedula==''){
        alert("Debe ingresar todos los datos");
        return false;
    }
    cadena.append('curso', curso);
    cadena.append('nombres', nombres);
    cadena.append('apellidos', apellidos);
    cadena.append('telefonos', telefonos);
    cadena.append('correo', correo);
    cadena.append('nivel', nivel);
    cadena.append('ocupacion', ocupacion);
    cadena.append('profesion', profesion);
    cadena.append('observacion', observacion);
    cadena.append('cedula', cedula);
    $.ajax({
        url : "solicitarCurso.php",
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
    $("#nombres").val("");
    $("#apellidos").val("");
    $("#cedula").val("");
    $("#telefonos").val("");
    $("#correo").val("");
    $("#observacion").val("");
}