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
</head>
<body>
<?php include "../includes/nav.php"; ?>
<div class="container">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="row">
    <div class="col">
    </div>

    <div class="col-5 p-4 border border-warning" id="nuevoCliente">
      <h4 align="center">LOGIN</h4>
      <form  action="../back/login2.php" method="post">
        <div class="form-group">
          <label>DNI:</label>
          <input class="form-control" type="text" name="dni"  maxlength="8"  required>
        </div>
        <div class="form-group">
          <label>Contraseña:</label>
          <input class="form-control" type="text" name="pass"  required>
        </div>
        <div class="form-group">
          <button  class="btn btn-primary btn-sm btn-block" type="submit" name="enviar" id="enviar">Ingresar</button>
        </div>
      </form>
    </div>

    <div class="col">
    </div>
  </div>
  <br>
  <br>
  <br>
  </div>
</body>
<?php include "../includes/footer.php"; ?>
</html>
