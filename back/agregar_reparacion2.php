<!DOCTYPE html>
<?php
session_start();
  $dni_cliente = $_SESSION['dni_usuario'];
  $nombre_cliente = $_SESSION['nombre_usuario'];
  $apellido_cliente = $_SESSION['apellido_usuario'];
  $tipo = $_POST['tipo'];
  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $fechaE =date("d/m/y");
  $fechaS ="0";
  $precio = $_POST['precio'];
  $reparacion = $_POST['reparacion'];
  $estado="0";
  $archivo = fopen('../BD/equipo_cliente.dat','r') or die ("Error");
  $archivo = fopen('../BD/equipo_cliente.dat','a+') or die ("Error");
  fputs($archivo, $dni_cliente."|".$nombre_cliente."|".$apellido_cliente."|".$tipo."|".$marca."|".$modelo."|".$fechaE."|".$fechaS."|".$precio."|".$reparacion."|".$estado."\n");
  fclose($archivo);
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cell System</title>
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../css/agency.min.css" rel="stylesheet">
</head>
<body>
<?php include "../includes/nav.php"; ?>
<div class="container">
  <br>
  <br>
  <br>
  <br>
  <br>
  <div  class="row bg-light">
    <h4 align="center">REPARACIÓN REGISTRADA</h4>
    <br>
    <table class="table">
      <thead>
        <tr class="bg-warning">
          <th scope="col">DNI</th>
          <th scope="col">NOMBRE</th>
          <th scope="col">APELLIDO</th>
          <th scope="col">TIPO</th>
          <th scope="col">MARCA</th>
          <th scope="col">MODELO</th>
          <th scope="col">FECHA ENTRADA</th>
          <th scope="col">PRECIO</th>
          <th scope="col">REPARACIÓN</th>
        </tr>
      </thead>
      <tbody>
        <?php
          echo"<tr>";
          echo "<td>".$dni_cliente."</td>";
          echo "<td>".$nombre_cliente."</td>";
          echo "<td>".$apellido_cliente."</td>";
          echo "<td>".$tipo."</td>";
          echo "<td>".$marca."</td>";
          echo "<td>".$modelo."</td>";
          echo "<td>".$fechaE."</td>";
          echo "<td>".$precio."</td>";
          echo "<td>".$reparacion."</td>";
          echo"</tr>";
          echo '</tbody>
        </table>';
        ?>
  </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
  <script type="text/javascript">

    function mostrarReparacion(){
      document.getElementById('reparacion').style.display ='block';
      document.getElementById('buscar').style.display ='none';
      document.getElementById('listos').style.display ='none';
      document.getElementById('entregados').style.display ='none';
    }

    function mostrarBuscar(){
      document.getElementById('buscar').style.display ='block';
      document.getElementById('reparacion').style.display ='none';
      document.getElementById('listos').style.display ='none';
      document.getElementById('entregados').style.display ='none';
    }
    function mostrarListos(){
      document.getElementById('listos').style.display ='block';
      document.getElementById('buscar').style.display ='none';
      document.getElementById('reparacion').style.display ='none';
      document.getElementById('entregados').style.display ='none';
    }
    function mostrarEntregados(){
      document.getElementById('entregados').style.display ='block';
      document.getElementById('buscar').style.display ='none';
      document.getElementById('reparacion').style.display ='none';
      document.getElementById('listos').style.display ='none';
    }
  </script>
</body>
  <?php include "../includes/footer.php"; ?>
</html>
