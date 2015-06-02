<?php
include("datos/conexion.php");
$query = "Select * from curso";
$resultado = mysql_query($query);
$arreglo = array();

while ($fila = mysql_fetch_assoc($resultado)) {
    $arreglo[$fila['oid']] = $fila['nombre'];
}
echo json_encode($arreglo);
?>