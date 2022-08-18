<?php
session_start();
include "conexion.php";

    $correo = $_POST['correo'];
    $pwd = md5($_POST['password']);
    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and password='$pwd'");
    if(mysqli_num_rows($validar_login)>0){
        $_SESSION['login'] = $correo; 
        echo '
        <script>
        alert("Bienvenido");
        window.location = "../index.php";
        </script>
        ';}
        else{
        echo '
        <script>
        alert("Usuario no valido o datos equivocados");
        window.location = "../login.php";
        </script>
        ';
        }
?>