<div class="container text-center">
  <div class="card" style="width: 18rem;">
      <?php
        if(is_file("./app/vista/fotos/".$_SESSION['foto'])){
          echo '<img src="'.APP_URL.'app/vista/fotos/'.$_SESSION['foto'].'" class="card-img-top">';
        }else{
          echo '<img src="'.APP_URL.'app/vista/fotos/default.png" class="card-img-top">';
        }
      ?>
    <div class="card-body">
      <h5 class="card-title">¡Bienvenido <?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?>!</h5>
      <p class="card-text">Este Trabajo fue hecho por Santiago Vergara y Nicolas Diaz <br>
      y Nicolas Diaz. </p>
      <a href="<?php echo APP_URL."userUpdate/".$_SESSION['id']."/"; ?>" class="btn btn-primary">Editar Cuenta</a>
      <br>
      <a href="<?php echo APP_URL."userPhoto/".$_SESSION['id']."/"; ?>" class="btn btn-secondary">Editar Foto de Perfil</a>

    </div>
  </div>
</div>
