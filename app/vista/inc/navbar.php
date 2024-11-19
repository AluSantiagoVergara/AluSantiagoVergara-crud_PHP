<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo APP_URL;?>dashboard/">
        <img src="<?php echo APP_URL;?>app/vista/img/navarImagen.jpg" 
        alt="Logo" width="64" height="60" class="d-inline-block align-text-top">
        Sitio to guapo
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?php echo APP_URL;?>dashboard/">Dashboard</a>
        <div class="dropdown">
          <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuario
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo APP_URL;?>userNew/">Nuevo</a></li>
            <li><a class="dropdown-item" href="<?php echo APP_URL;?>userList/">Lista</a></li>
          </ul>
        </div>
        

        <div class="dropdown">
          <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ** <?php echo $_SESSION['usuario']; ?> **
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo APP_URL."userUpdate/".$_SESSION['id']."/"; ?>">Mi cuenta</a></li>
            <li><a class="dropdown-item" href="<?php echo APP_URL."userPhoto/".$_SESSION['id']."/"; ?>">Mi Foto</a></li>
            <li><a class="dropdown-item" href="<?php echo APP_URL;?>logOut/" id="btn_exit">Salir</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
