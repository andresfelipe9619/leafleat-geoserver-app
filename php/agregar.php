<?php

include 'conexion_db.php'; // Se incluye el archivo de conexión a la base de datos
$dbcon = conexion(); // se crea una variable con la función definida anteriormente

 $lat=$_POST['lat'];
 $lon=$_POST['lon'];
 $nom=$_POST['nom'];
 $tip=$_POST['tip'];
 $desc=$_POST['desc'];
 $fecha=$_POST['fecha'];
 $foto=$_POST['foto'];
 
  if($foto == 'Sin Foto'){
 $nomb_img =$foto ;
 }else{
 $nomb_img= 'img/'.time().".jpg";
 
 list(, $foto) = explode(';', $foto);
 list(, $foto)      = explode(',', $foto);
 $foto = base64_decode($foto);

 file_put_contents("../".$nomb_img, $foto);
 
 }
 
 $sql ="INSERT INTO eventos_huecos (lat,lon, nombre,tipo,descripcion,fecha,foto)
    VALUES ('".$lat."', '".$lon."', '".$nom."', '".$tip."','".$desc."','".$fecha."', '".$nomb_img."');";
 
 $resultado = pg_query($dbcon, $sql);
?>