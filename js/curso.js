function cursos(){
    $.ajax({
        url : 'cursosJson.php',
        dataType : 'JSON',
        success : function(json) {//alert(json);
            $.each(json, function(item, valor) {
                var newListItem = $('<li/>', {
                    html: "<a href='#' onclick='mostrarCurso("+item+")'><span></span>"+valor+"</a>",
                    "id": item
                });
                $("#lista_cursos").append(newListItem);
            });
        }
    });
}

function mostrarCurso(id){

}