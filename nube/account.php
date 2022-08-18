<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La nube del cine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/formulario.js"></script>

</head>


<body >


    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
          <a class="navbar-brand active" >La nube del cine</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

              <a class="nav-link active" aria-current="page" href="index.php">   Inicio  </a> 
      </div>
        </div>
          <div class="navbar-nav">
            <a class="nav-link active" href="perfil.php">Ver  Perfil </a>
            </div>
       <nav class="navbar navbar-light bg-warning">
        <form class="container-fluid justify-content-start">
          <a href="logout.php" class="btn btn-dark">Cerrar sesión</a>
        

        </form>  
      </div>
      </nav>

    <br/>
    <br/>

<div class="container">
    <img src="css/imágenes/22.jpg" class="rounded float-start"  alt="img" width="400" height="400">
</div>

<div class="text-center">
<p class="h1" >Perfil </p>
  <br/>
<form class="form" style="padding-left: 50px; margin-top: 30px;" action="php/editar.php" method="POST">
<?php 
      session_start();
       $perfil = $_SESSION['login'];;
       include 'php/conexion.php';
       
       $query = "SELECT * FROM usuarios where correo = '".$perfil."'";
       $result = mysqli_query($conexion, $query);   
       while($mostrar=mysqli_fetch_array($result)){
      ?>  
    <div class="row mb-4">
      <label for="inputAddress" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-5">
      <input type="hidden" value="<?php echo $mostrar ['usuario_id']?>" name="iduser">  
      <input type="text" name="nombres" class="form-control" id="inputAddress" value="<?php echo $mostrar ['nombres']?>">
    </div>
</div>
    <div class="row mb-4">
      <label for="inputAddress2" class="col-sm-2 col-form-label">Apellido</label>
      <div class="col-sm-5">
      <input type="text" name="apellidos" class="form-control" id="inputAddress2" value="<?php echo $mostrar ['apellidos']?>">
    </div>
</div>
<div class="row mb-4">
  <label for="inputEmail3" class="col-sm-2 col-form-label">Correo</label>
  <div class="col-sm-5">
    <input type="email" name="correo" class="form-control" id="inputEmail3"  value="<?php echo $mostrar ['correo']?>" disabled>
  </div>
</div>
<div class="row mb-4">
  <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña  </label>
  <div class="col-sm-5">
    <input type="password" name="password" class="form-control" id="inputPassword3">
  </div>
</div>
  <div class="row mb-4">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Reingresar</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
</div>
  </div>
</fieldset>
          <div class="text-center">
          <input type="submit" value="Guardar" class="btn btn-dark">
          <a href="perfil.php" class="btn btn-dark">Cancelar</a>
        </div>
        <?php } ?>
       </form>
      
</body>
</html>