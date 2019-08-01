<?php
  include("../PHPMailer/class.phpmailer.php");
  include("../PHPMailer/class.smtp.php");
  $dni = $_POST['dni'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $tel = $_POST['telefono'];
  $pass =substr( md5(microtime()), 1, 8);
  $perfil = '0';
  $estado = '1';
  $email = $_POST['email'];
  $encontro=0;
  $archivo = fopen('../BD/usuarios.dat','r') or die ("Error");
  while (!feof($archivo))
  {
    $linea = fgets($archivo);
    $datos = explode("|", $linea);

    if($datos[0] != null)
    {
      $dniBD = $datos[0];
      if ($dni == $dniBD)
      {
        $encontro = 1;
      }
    }
  }
  fclose($archivo);

  if($encontro == 1)
  {
    echo "<script> alert('El cliente ya existe.');</script>";
    echo "<script> document.location.href='../web/gestion_usuario.php';</script>";
  }
  else
  {
    $archivo = fopen('../BD/usuarios.dat','a+') or die ("Error");
    fputs($archivo, $dni."|".$nombre."|".$apellido."|".$tel."|".$pass."|".$email."|".$perfil."|".$estado."\n");
    fclose($archivo);
    $mail = new PHPMailer;
    $mail->Host = "localhost";
    $mail->From = "cacs1986@gmail.com";
    $mail->Password = "cowboybebop1123";
    $mail->FromName = "Cell System";
    $mail->Subject = "Cell System te da la bienvenida.";
    $mail->AddAddress("$email", "$nombre");
    $mail->MsgHTML("$nombre estos son tus datos para entrar a nuestra página para seguir el estado de
    la reparación de tu equipo, ingresando con tu DNI como usuario y la siguiente contraseña: $pass");
    if(!$mail->Send()){
      echo "<script>alert(\"Ah ocurrido un error al enviar el mail.\");window.location='../web/gestion_usuario.php';</script>";
    }else{
      echo "<script>alert(\"Registro exitoso. Se ha enviado un mail a $email.\");window.location='../web/gestion_usuario.php';</script>";
      die();
  }
}

?>
