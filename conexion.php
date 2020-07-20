<?php 

$host="localhost";
$user="root";
$pass="";
$db="facturacion";

$conection=@mysqli_connect($host,$user,$pass,$db);

if (!$conection){
	echo "Error de conexion";
}



 ?>
