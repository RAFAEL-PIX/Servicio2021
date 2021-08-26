<?php
include 'partials/autorizar_report.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c80dac9823.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Css/Style.css" />

    <title>Autorizacion de reportes!</title>
  </head>
    <br>
   <body class="bg-green">
  <section>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
          <div class="container-fluid">
            <a class="navbar-brand margin-left: 5rem" href="#"><img src="Img/LOGO.png" class="img-fluid" width="110" height="300"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto text-left">
                <li class="nav-item">
                  <a class="fw-bold text-success nav-link active" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="fw-bold text-success nav-link" href="#">Autorizacion de Reportes</a>
                </li>
                <li class="nav-item">
                  <a class="fw-bold text-success nav-link" href="G_Reportes.php">Generar Reportes</a>
                </li>
                <li class="nav-item">
                  <a class="fw-bold text-success nav-link" href="#">Control de Reportes</a>
                </li>
                <li class="nav-item">
                  <a class="fw-bold text-success nav-link" href="formulario.php">nuevo usuario</a>
                </li>
                <li class="nav-item">
                  <a class="fw-bold text-success nav-link" href="#">Ver Reportes</a>
                </li>
                <li class="nav-item">
                  <a class="fw-bold text-success nav-link" href="partials/cerrar_sesion.php">Cerrar Sesion</a>
                </li>
                
                <li class="nav-item">
                </li>
              </ul>
            </div>
          </div>
        </nav>

  </section>
  <table class="table">
    <table class="table table-bordered border-dark">
    <thead>
      <tr>
        <th scope="col">Id_Reporte</th>
        <th scope="col">Id</th>
        <th scope="col">usuario</th>
        <th scope="col">fecha_de-Reporte</th>
        <th scope="col">nombre</th>
        <th scope="col">apellido</th>
        <th scope="col">Autorizar</th>
        <th scope="col">eliminar</th>
      </tr>
    </thead>
    <tbody>
    <?php
        $datosreport = reportes();
        while($registro = mysqli_fetch_row($datosreport)){

        $indice = $registro[0]."||".$registro[1]."||".$registro[2]."||".$registro[3]."||".$registro[4]."||".$registro[5];

        ?>
        <tr>
            <td><?php echo $registro[0] ?></td> 
            <td><?php echo $registro[1] ?></td>
            <td><?php echo $registro[2] ?></td>
            <td><?php echo $registro[3] ?></td>
            <td><?php echo $registro[4] ?></td>
            <td><?php echo $registro[5] ?></td>
            <td><div class="text-center"><button class="btn btn-info" type="button" data-bs-toggle="modal" data-bs-target="#modificar" onclick="insertar_datos('<?php echo $indice ?>')"><i class="fas fa-user-edit"></i></button></div></td>
            <td><div class="text-center"><button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#eliminar" onclick="insertar_datos_eliminar('<?php echo $indice ?>')"><i class="far fa-trash-alt"></i></button></div></td>
        </tr>
        <?php
         }
        ?>
     
   
    </tbody>
  </table>































  <script src="https://code.jquery.com/jquery-3.6.0.js"integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="sweetalert2.all.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <script src="js/insertar.js"></script>
    
    <script type="text/javascript">
    $(document).ready(function(){
      $("#confirmar_actualizar").click(function(){
        actualizar();
      });
    });
  </script>

    <script type="text/javascript">
    $(document).ready(function(){
      $("#confirmar_eliminar").click(function(){
        eliminar();
      });
    });
  </script>
  </body>
</html>