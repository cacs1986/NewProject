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
  <div class="row">
    <div class="col">
    </div>

    <div class="col-5 p-4 border border-warning" id="nuevoEquipo">
      <h4 align="center">AGREGAR REPARACIÓN</h4>
      <br>
      <form  action="../back/agregar_reparacion2.php" method="post">
        <div class="form-group">
          <p class="text-success" align="center">Cliente: DNI <?php echo $_SESSION['dni_usuario'];?>  <?php echo $_SESSION['apellido_usuario'];?>  <?php echo $_SESSION['nombre_usuario'];?></p>
        </div>
        <div class="form-group">
          <label>Tipo:</label>
          <select class="form-control" name="tipo" required>
            <option value="Celular">Celular</option>
            <option value="PC">PC</option>
            <option value="Netbook">Netbook</option>
            <option value="Notebook">Notebook</option>
            <option value="Tablet">Tablet</option>
          </select>
        </div>
        <div class="form-group">
          <label>Marca:</label>
          <select class="form-control" name="marca" required>
            <option value="Acer">Acer</option>
            <option value="Admiral">Admiral</option>
            <option value="Airis">Airis</option>
            <option value="Alcatel">Alcatel</option>
            <option value="Amazon">Amazon</option>
            <option value="Apple">Apple</option>
            <option value="Asus">Asus</option>
            <option value="Banghó">Banghó</option>
            <option value="BGH">BGH</option>
            <option value="BGH Positivo">BGH Positivo</option>
            <option value="Compac">Compac</option>
            <option value="CX">CX</option>
            <option value="Dell">Dell</option>
            <option value="Dinax">Dinax</option>
            <option value="eNova">eNova</option>
            <option value="Envizen">Envizen</option>
            <option value="Exo">Exo</option>
            <option value="Gadnic">Gadnic</option>
            <option value="Genérico">Genérico</option>
            <option value="Gigabyte">Gigabyte</option>
            <option value="HP">HP</option>
            <option value="Huawei">Huawei</option>
            <option value="IBM">IBM</option>
            <option value="Intel">Intel</option>
            <option value="IPad">IPad</option>
            <option value="Lenovo">Lenovo</option>
            <option value="LG">LG</option>
            <option value="Master-G">Master-G</option>
            <option value="Microsoft">Microsoft</option>
            <option value="Motorola">Motorola</option>
            <option value="MSI">MSI</option>
            <option value="NEXT">NEXT</option>
            <option value="Noblex">Noblex</option>
            <option value="NogaNet">NogaNet</option>
            <option value="Nokia">Nokia</option>
            <option value="Overtech">Overtech</option>
            <option value="Performance">Performance</option>
            <option value="Philips">Philips</option>
            <option value="Razer">Razer</option>
            <option value="RCA">RCA</option>
            <option value="Samsung">Samsung</option>
            <option value="Sony">Sony</option>
            <option value="Titan">Titan</option>
            <option value="Toshiba">Toshiba</option>
            <option value="TCL">TCL</option>
            <option value="X-View">X-View</option>
          </select>
        </div>
        <div class="form-group">
          <label>Modelo:</label>
          <input class="form-control" type="text" name="modelo" required>
        </div>
        <div class="form-group">
          <label>Precio:</label>
          <input class="form-control" type="text" name="precio"  required placeholder="00,00">
        </div>
        <div class="form-group">
          <label>Tipo de Reparación:</label>
          <select class="form-control" name="reparacion" required>
            <option value="Batería">Batería</option>
            <option value="Cámara fotográfica">Cámara fotográfica</option>
            <option value="Cuenta Gmail">Cuenta Gmail</option>
            <option value="Cuenta Gmail alta gama">Cuenta Gmail alta gama</option>
            <option value="Desbloqueo">Desbloqueo</option>
            <option value="Flex">Flex</option>
            <option value="Formateo + S.O">Formateo + S.O</option>
            <option value="Instalacion de Hardware">Instalacion de Hardware</option>
            <option value="Limpieza y mantenimiento PC">Limpieza y mantenimiento PC</option>
            <option value="Micrófono">Micrófono</option>
            <option value="Módulos o Pantalla">Módulos o Pantalla</option>
            <option value="Parlante">Parlante</option>
            <option value="Pin de carga">Pin de carga</option>
            <option value="Pin de carga alta gama">Pin de carga alta gama</option>
            <option value="Sensor">Sensor</option>
            <option value="Recuperación de datos">Recuperación de datos</option>
            <option value="Teclado">Teclado</option>
            <option value="Touch T">Touch T</option>
            <option value="Touch T10">Touch T10</option>
          </select>
        </div>
        <div class="form-group">
          <button  class="btn btn-primary btn-sm btn-block" type="submit" name="enviarequipo" id="enviar">Agregar</button>
        </div>
      </form>
    </div>

    <div class="col">
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  </div>
  </body>
    <?php include "../includes/footer.php"; ?>
  </html>
