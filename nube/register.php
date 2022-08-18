<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La nube del cine</title>
    <link rel="stylesheet" href="css/Nube2/estilos.css">
 
</head> 
<body>
<div class="contenedor">
    <div class="cabecera">
        <h2>Cree su cuenta en nube del cine</h2>
    </div>
    <form id="formulario" action="php/inserter.php" method="POST">
           

        <div class="form-control">
            <label for="usuario">Nombre de usuario</label>
            <input id="usuario" name="nombres" type="text" placeholder="Nombre de usuario"  required >            
        </div>


        <div class="form-control">
            <label for="apellido" >Apellido del Usuario</label>
            <input id="apellido" name="apellidos" type="text" placeholder="Apellido de usuario"  required >           
        </div>
    

        <div class="form-control">
            <label for="email">Correo</label>
            <input id="email" name="correo" type="email" placeholder="Usuario@gmail.com"  required >       
        </div>
    

        <div class="form-control">
            <label for="pass">Contraseña</label>
            <input id="pass" name="password" type="password" placeholder="Contraseña"  required >       
        </div>
    

        <div class="form-control">
            <label for="passConfirma">Confirmar Contraseña</label>
            <input id="passConfirma"  name="password" type="password" placeholder="Confirmar Contraseña"  required >
        </div>


      <input type="submit" value="Crear">
    
        
    </form> 
</div>

</body>
</html>