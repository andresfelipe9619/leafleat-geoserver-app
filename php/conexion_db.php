<?php

function conexion(){
$host = '192.168.46.65';
$port = '5432';
$base_datos = 'Sistemasquejas';
$usuario = 'uv201532261';
$pass = 'uv201532261';
$conexion = pg_connect("host=$host port=$port dbname=$base_datos user=$usuario password=$pass");
return($conexion);
}

?>