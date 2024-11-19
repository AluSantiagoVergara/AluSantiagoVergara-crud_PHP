<!--
<div class="container text-center">
  <form class="row g-3 needs-validation" method="POST" novalidate>
    <div class="col-md-6">
      <label for="login_usuario" class="form-label">Usuario</label>
      <input type="text" class="form-control" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" id="login_usuario" value="Otto" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6">
      <label for="login_clave" class="form-label">Clave</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="text" class="form-control" id="login_clave" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">submit</button>
    </div>

    
  </form>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
-->

<div class="main-container">

    <form class="box login" action="" method="POST" autocomplete="off" >
		<h5 class="title is-5 has-text-centered is-uppercase">LOGIN</h5>

		<div class="field">
			<label class="label">Usuario</label>
			<div class="control">
			    <input class="input" type="text" name="login_usuario" value ="PongaIngresar" pattern="[a-zA-Z0-9]{4,40}" maxlength="40" required>
			</div>
		</div>

		<div class="field">
		  	<label class="label">Clave</label>
		  	<div class="control">
		    	<input class="input" type="password" name="login_clave" value ="nadadeloqueleesacaesimportante" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
		  	</div>
		</div>

		<p class="has-text-centered mb-4 mt-3">
			<button type="submit" class="button is-info is-rounded">Iniciar sesion</button>
		</p>



	</form>
</div>

<?php
	if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
		$insLogin->iniciarSesionControlador();
	}
?>

