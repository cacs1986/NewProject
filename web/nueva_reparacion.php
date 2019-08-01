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
    #nuevoCliente{
      display: none;
    }
    #buscar{
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
      <a  class="nav-link" href="javascript:void(0);" onclick="mostrarNuevoCliente();">Cliente Nuevo</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="javascript:void(0);" onclick="mostrarBuscar();">Buscar Cliente</a>
    </li>
  </ul>
<br>
<br>
<div class="row">
  <div class="col">
  </div>

  <div class="col-4" id="buscar">
    <form class="form-inline" action="nueva_reparacion.php" method="post">
      <input class="form-control mr-sm-2" type="search" name="busqueda" placeholder="Ingrese DNI" aria-label="Search">
      <button class="btn btn-primary my-2 my-sm-0 "name="enviardni" type="submit">Buscar</button>&nbsp
    </form>
  </div>

  <div class="col-5 p-4 border border-warning" id="nuevoCliente">
    <h4 align="center">NUEVO CLIENTE</h4>
    <form  action="../back/nuevocliente.php" method="post">
      <div class="form-group">
        <label>DNI:</label>
        <input class="form-control" type="text" name="dni"  maxlength="8"  required>
      </div>
      <div class="form-group">
        <label>Nombre:</label>
        <input class="form-control" type="text" name="nombre"  required>
      </div>
      <div class="form-group">
        <label>Apellido:</label>
        <input class="form-control" type="text" name="apellido" required>
      </div>
      <div class="form-group">
        <label>Número de contácto:</label>
        <input class="form-control" type="tel" name="telefono"  required>
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input class="form-control" type="email" name="email" required>
      </div>
      <div class="form-group">
        <button  class="btn btn-primary btn-sm btn-block" type="submit" name="enviarcliente" id="enviar">Agregar</button>
      </div>
    </form>
  </div>

  <div class="col">
  </div>
</div>
<br>
  <?php
  if(isset($_POST['enviardni'])){
    $_SESSION['dni_usuario']=$_POST['busqueda'];//se guarda el dni en la sesion para acciones
    $dni_busqueda=$_POST['busqueda'];
    $archivo = fopen('../BD/usuarios.dat','r') or die ("Error");
    $encontro=0;
    while (!feof($archivo))
    {
        $linea = fgets($archivo);
        $datos = explode("|", $linea);
        if ($dni_busqueda==$datos[0])
        {
          $_SESSION['nombre_usuario']=$datos[1];
          $_SESSION['apellido_usuario']=$datos[2];
          $contacto=$datos[3];
          $email=$datos[5];
          $perfil=$datos[6];
          $estado=$datos[7];
          $encontro=1;
          }
    }
    if ($encontro==1){
      echo '<table class="table">
      <thead>
        <tr class="bg-warning">
          <th scope="col">DNI</th>
          <th scope="col">NOMBRE</th>
          <th scope="col">APELLIDO</th>
          <th scope="col">CONTACTO</th>
          <th scope="col">EMAIL</th>
          <th scope="col">PERFIL</th>
          <th scope="col">ESTADO</th>
          <th scope="col">ACCIONES</th>
        </tr>
      </thead>
      <tbody>';
      echo"<tr>";
      echo "<td>".$dni_busqueda."</td>";
      echo "<td>".$_SESSION['nombre_usuario']."</td>";
      echo "<td>".$_SESSION['apellido_usuario']."</td>";
      echo "<td>".$contacto."</td>";
      echo "<td>".$email."</td>";
      switch ($perfil) {
        case '0':
          echo "<td>Cliente</td>";
          break;
        case '1':
          echo "<td>Administrador</td>";
          break;
        case '2':
          echo "<td>Super Adimistrador</td>";
          break;
    }
    if($estado==0){
      echo "<td>Inactivo</td>";
    }else{
      echo "<td>Activo</td>";
    }
      echo '<td><a href="agregar_reparacion.php" class="btn btn-primary btn-sm">Agregar Reparación</a></td>';
      echo"</tr>";
      echo '</tbody>
      </table>';
    }else{
        echo "<script> alert('El numero de DNI no se encuentra registrado.');</script>";
    }
  }
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
  function mostrarNuevoCliente(){
    document.getElementById('nuevoCliente').style.display ='block';
    document.getElementById('buscar').style.display ='none';
  }
  function mostrarBuscar(){
    document.getElementById('buscar').style.display ='block';
    document.getElementById('nuevoCliente').style.display ='none';
  }
  </script>
</body>
  <?php include "../includes/footer.php"; ?>
</html>
