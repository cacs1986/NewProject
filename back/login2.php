<?php
session_start();
$dni=$_POST['dni'];
$pass=$_POST['pass'];
$encontro=0;
if (empty($_POST['pass']) && empty($_POST['dni'])) {
    echo "<script> alert('Los datos son requeridos para acceder.');</script>";
    echo "<script> document.location.href='../web/login.php';</script>";
} else {
  $archivo = fopen('../BD/usuarios.dat', 'r') or die("Error");
  while (!feof($archivo))
  {
      $linea = fgets($archivo);
      $datos = explode("|", $linea);
      if ($dni==$datos[0])
      {
        if($pass==$datos[4]){
          $_SESSION['dni']=$datos[0];
          $_SESSION['nombre']=$datos[1];
          $_SESSION['apellido']=$datos[2];
          $_SESSION['telefono']=$datos[3];
          $_SESSION['pass']=$datos[4];
          $_SESSION['email']=$datos[5];
          $_SESSION['perfil']=$datos[6];
          $_SESSION['estado']=$datos[7];
          $encontro=1;
        }else{
          echo "<script> alert('La contraseña es incorrecta.');</script>";
          echo "<script> document.location.href='../web/login.php';</script>";
        }
      }
  }
  if ($encontro==1){
    switch ($_SESSION['perfil']) {
      case '0':
      if($_SESSION['estado']==1){
        echo "<script> document.location.href='../web/.php';</script>";
      }else{
        echo "<script> alert('Esta cuenta no esta activa.');</script>";
        echo "<script> document.location.href='../web/login.php';</script>";
      }
      break;
      case '1':
      if($_SESSION['estado']==1){
        echo "<script> document.location.href='../web/.php';</script>";
      }else{
        echo "<script> alert('Esta cuenta no esta activa.');</script>";
        echo "<script> document.location.href='../web/login.php';</script>";
      }
      break;
      case '2':
      if($_SESSION['estado']==1){
        echo "<script> document.location.href='../web/nueva_reparacion.php';</script>";
      }else{
        echo "<script> alert('Esta cuenta no esta activa.');</script>";
        echo "<script> document.location.href='../web/login.php';</script>";
      }
      break;
    }
  }else{
    echo "<script> alert('El numero de DNI no se encuentra registrado.');</script>";
    echo "<script> document.location.href='../web/login.php';</script>";
  }
}
?>
