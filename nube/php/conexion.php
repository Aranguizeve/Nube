<?php 
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_eva03';
$conexion = mysqli_connect($host, $username, $password);
mysqli_select_db($conexion, $database) or die("Error al conectar database");
mysqli_set_charset($conexion, "utf8");
?>