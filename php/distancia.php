<?php

include 'conexion_db.php'; // Se incluye el archivo de conexión a la base de datos
$dbcon = conexion(); // se crea una variable con la función definida anteriormente

 
 $sql ="SELECT * FROM eventos_huecos";
 
 $resultado = pg_query($dbcon, $sql);
 $row = pg_fetch_assoc($resultado);

 echo $row
 
?>