<?php
session_start();
$nombre = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo =  $_SESSION['login'];;
$pwd = md5($_POST['password']);
include 'conexion.php';        
        $query = "UPDATE usuarios set nombres = ?, apellidos = ?, password = ? WHERE correo = ?";
        $prepare = mysqli_prepare($conexion, $query);
        $result = mysqli_stmt_bind_param($prepare,"ssss", $nombre, $apellidos, $pwd, $correo);
        $result = mysqli_stmt_execute($prepare);
        if(!$result){
            echo'<script>
            alert("Error al editar: ");
             window.location = "../account.php";
            </script>
            ';
        }else{
            echo'<script>
            alert("Usuario editado con exito");
             window.location = "../perfil.php";
            </script>
            ';
        }


?>