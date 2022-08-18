<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El alma del cine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="css/estilos.css">
    
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
</div>
      <?php 
      session_start();
       $perfil = $_SESSION['login'];;
       include 'php/conexion.php';
       
       $query = "SELECT * FROM usuarios where correo = '".$perfil."'";
       $result = mysqli_query($conexion, $query);   
       while($mostrar=mysqli_fetch_array($result)){
      ?>  
          <p class="h3"> Nombre de usuario: <?php echo $mostrar ['nombres']?></p>   
          <p class="h3"> Apellidos: <?php echo $mostrar ['apellidos']?></p>   
          <p class="h3"> Correo:    <?php echo $mostrar ['correo']?><p>
      <?php
       }
      ?><br>
          <div class="text-center">
          <a href="account.php" class="btn btn-dark">Editar Perfil</a>
        </div>
     
      
</body>
</html>