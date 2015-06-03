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