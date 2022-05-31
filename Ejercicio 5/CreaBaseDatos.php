<?php
//esto es se usara para la conexion al servidor
$servidor = "localhost";
$nombreusuario = "root";
$password = "";
//
$BasName=$_GET['BaseName'];

$conn = mysqli_connect($servidor, $nombreusuario, $password);
if (!$conn) {
    die("Conexión fallida: ". mysqli_connect_error());
}

$sqlDB = "CREATE DATABASE $BasName";
if (mysqli_query($conn, $sqlDB) === true){
    echo "Base de datos creada correctamente...";
}else{
    die("Error al crear base de datos: " . $conexion->error);
}


?>