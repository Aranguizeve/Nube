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
          <div class="navbar-nav">
            <a class="nav-link active" href="perfil.php">Ver Perfil </a>
            </div>
       <nav class="navbar navbar-light bg-warning">
        <form class="container-fluid justify-content-start">
        <a href="logout.php" class="btn btn-dark">Cerrar sesión</a>
        

        </form>  
      </div>
      </nav>

    <br/>
    <br/>
    <?php
      include "php/conexion.php";
      $peli = $_GET['peli'];
      $query= "SELECT * from peliculas WHERE pelicula_id='".$peli."'";
      $result=mysqli_query($conexion,$query);
      while($mostrar=mysqli_fetch_array($result)){
    ?>
<div class="container">
    <img src="<?php echo $mostrar ['portada']?>" class="rounded float-start"  alt="img" width="380px" height="500px">
</div>

<div class="text-center">
<p class="h1" ><?php echo $mostrar ['titulo']?></p>
  <br/>

  <p class="h3"> Sinopsis:</p>

        <p class="h5"><?php echo $mostrar ['sinopsis']?></p>   
                 
           <p class="h3"> Dirección:  </p>
            <p class="h5"><?php echo $mostrar ['director']?> </p>
            <p class="h3"> Protagonistas:</p>
             <p class="h5"> <?php echo $mostrar ['protagonistas']?></p> 
         
</div>
       <br/> 
<?php } ?>

     
      
</body>
</html>