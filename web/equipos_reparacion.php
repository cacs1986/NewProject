<?php session_start(); ?>
<!DOCTYPE html>
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
  <style media="screen">
    #reparacion{
      display: none;
    }
    #listos{
      display: none;
    }
    #buscar{
      display: none;
    }
    #entregados{
      display: none;
    }
  </style>
</head>
<body>
<?php include "../includes/nav.php"; ?>
<div class="container">
  <br>
  <br>
  <br>
  <ul class="nav justify-content-center">
    <li class="nav-item">
      <a  class="nav-link" href="javascript:void(0);" onclick="mostrarReparacion();">Equipos en Reparación</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="javascript:void(0);" onclick="mostrarListos();">Equipos Listos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="javascript:void(0);" onclick="mostrarEntregados();">Equipos Entregados</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="javascript:void(0);" onclick="mostrarBuscar();">Buscar Equipo por Cliente</a>
    </li>
  </ul>
  <br>
  <br>
  <div class="row">
    <div class="col">
    </div>

    <div class="col-4" id="buscar">
      <form class="form-inline" action="usuario.php" method="post">
        <input class="form-control mr-sm-2" type="search" name="busqueda" placeholder="Ingrese DNI" aria-label="Search">
        <button class="btn btn-primary my-2 my-sm-0 "name="enviardni" type="submit">Buscar</button>&nbsp
      </form>
    </div>

    <div class="col">
    </div>
  </div>

  <div id="reparacion" class="row bg-light">
    <h4 align="center">EQUIPOS EN REPARACIÓN</h4>
    <br>
    <table class="table">
      <thead>
        <tr class="bg-warning">
          <th scope="col">DNI CLIENTE</th>
          <th scope="col">TIPO</th>
          <th scope="col">MODELO</th>
          <th scope="col">FECHA ENTRADA</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $archivo = fopen('../BD/equipo_cliente.dat','r') or die ("Error");
        while (!feof($archivo)){
            $linea = fgets($archivo);
            $datos = explode("|", $linea);
            if(!empty($datos[0])){
              if($datos[5]==0){
                echo"<tr>";
                echo "<td>".$datos[0]."</td>";
                echo "<td>".$datos[1]."</td>";
                echo "<td>".$datos[2]."</td>";
                echo "<td>".$datos[3]."</td>";
              }
            }
            echo"</tr>";
        }
        echo '</tbody>
        </table>';
        ?>
  </div>

  <div id="listos" class="row bg-light">
    <h4 align="center">EQUIPOS REPARADOS</h4>
    <br>
    <table class="table">
      <thead>
        <tr class="bg-warning">
          <th scope="col">DNI CLIENTE</th>
          <th scope="col">TIPO</th>
          <th scope="col">MODELO</th>
          <th scope="col">FECHA ENTRADA</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $archivo = fopen('../BD/equipo_cliente.dat','r') or die ("Error");
        while (!feof($archivo)){
          $linea = fgets($archivo);
          $datos = explode("|", $linea);
          if(!empty($datos[0])){
            if($datos[5]==1){
              echo"<tr>";
              echo "<td>".$datos[0]."</td>";
              echo "<td>".$datos[1]."</td>";
              echo "<td>".$datos[2]."</td>";
              echo "<td>".$datos[3]."</td>";
            }
          }
          echo"</tr>";
        }
        echo '</tbody>
        </table>';
        ?>
  </div>

  <div id="entregados" class="row bg-light">
    <h4 align="center">EQUIPOS ENTREGADOS</h4>
    <br>
    <table class="table">
      <thead>
        <tr class="bg-warning">
          <th scope="col">DNI CLIENTE</th>
          <th scope="col">TIPO</th>
          <th scope="col">MODELO</th>
          <th scope="col">FECHA ENTRADA</th>
          <th scope="col">FECHA SALIDA</th>
        </tr>
      </thead>
      <tbody>
      <?php
      $archivo = fopen('../BD/equipo_cliente.dat','r') or die ("Error");
      while (!feof($archivo)){
      $linea = fgets($archivo);
      $datos = explode("|", $linea);
      if(!empty($datos[0])){
        if($datos[5]==2){
          echo"<tr>";
          echo "<td>".$datos[0]."</td>";
          echo "<td>".$datos[1]."</td>";
          echo "<td>".$datos[2]."</td>";
          echo "<td>".$datos[3]."</td>";
          echo "<td>".$datos[4]."</td>";
        }
      }
      echo"</tr>";
      }
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
