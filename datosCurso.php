<?php
include("datos/conexion.php");
$oid = $_POST['id'];
$query = "Select * from curso where oid=".$oid;
$resultado = mysql_query($query);
$des = '';

while ($fila = mysql_fetch_assoc($resultado)) {
    $des = $fila['descrip'];
}
echo $des;
?>