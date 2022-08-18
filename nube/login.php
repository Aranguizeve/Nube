<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La nube del cine</title>
    <link rel="stylesheet" href="css/Nube2/estilos.css">}
    
</head>
<body>

    <div class="contenedor">
        <div class="cabecera">
            <h2>Iniciar Sesión</h2>
        </div>
        <form id="formulario" action="php/inicia.php" method="POST">
          
            <div class="form-control">
                <label for="email">E-mail</label>
                <input id="email" type="email" name="correo" placeholder="Usuario@gmail.com" required >
                <p></p>                
            </div>
        
            <div class="form-control">
                <label for="pass">Contraseña</label>
                <input id="pass" type="password" name="password" placeholder="Contraseña" required>
                <p></p>                
            </div>
        
            <a href="index.php"><button type="submit"> Iniciar </button></a>

        <button type="submit2"><a href="forgot.php" class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true"> ¿Has olvidado tu contraseña? </a></button>
        <button type="submit2"><a href="register.php" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true"> No posees una cuenta en La nube del cine,Crea una cuenta!!!</a></button>
    
        </form> 
    </div>

      
</body>

</html>