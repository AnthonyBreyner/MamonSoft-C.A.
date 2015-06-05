
<?php
$enlace =  mysql_connect('localhost', 'root', '');

if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
//echo 'Conectado satisfactoriamente';
$bd_seleccionada = mysql_select_db('mamonsoft', $enlace);

mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $enlace);

?>
