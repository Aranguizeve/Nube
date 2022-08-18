<?php

include "conexion.php";

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $pwd = md5($_POST['password']);

    $query = "INSERT INTO usuarios(nombres, apellidos, correo, password) VALUES (?, ?, ?, ?)"; 
    $prepare = mysqli_prepare($conexion, $query);   
    $result = mysqli_stmt_bind_param($prepare,'ssss',$nombres, $apellidos, $correo, $pwd);
    $result = mysqli_stmt_execute($prepare); 
    if(!$result){
        echo
     '<script>
       alert("Error al registrarse");
       window.location = "../register.php";
       </script>
       ';
    }else{
      echo '
       <script>
       alert("Registrado con exito");
       window.location = "../login.php";
       </script>
       ';
       exit; }   

?>