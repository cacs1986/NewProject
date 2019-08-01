<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarResponsive">
    <?php if(!isset($_SESSION['dni'])):?>
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Quienes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contactanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="web/login.php">Login</a>
          </li>
        </ul>
    <?php elseif ($_SESSION['perfil']==0):?>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Servicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Estado de mi Equipo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../back/logout.php">Salir</a>
      </li>
    </ul>
  <?php elseif ($_SESSION['perfil']==1):?>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="nueva_reparacion.php">Nueva Reparación</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="">Clientes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Reparaciones</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Ventas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../back/logout.php">Salir</a>
    </li>
  </ul>
<?php elseif ($_SESSION['perfil']==2):?>
<ul class="navbar-nav ml-auto">
  <li class="nav-item">
    <a class="nav-link" href="nueva_reparacion.php">Nueva Reparación</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="gestion_usuario.php">Clientes/Administradores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="equipos_reparacion.php">Reparaciones</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="equipos_ventas.php">Ventas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../back/logout.php">Salir</a>
  </li>
</ul>
<?php endif;?>
</div>
</div>
</nav>
