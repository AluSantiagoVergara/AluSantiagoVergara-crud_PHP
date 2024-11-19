<?php
	
	require_once "../../config/app.php";
	require_once "../vista/inc/session_star.php";
	require_once "../../autoload.php";
	
	use app\controlador\userController;

	if(isset($_POST['modulo_usuario'])){

		$insUsuario = new userController();

		if($_POST['modulo_usuario']=="registrar"){
			echo $insUsuario->registrarUsuarioControlador();
		}

		if($_POST['modulo_usuario']=="eliminar"){
			echo $insUsuario->eliminarUsuarioControlador();
		}

		if($_POST['modulo_usuario']=="actualizar"){
			echo $insUsuario->actualizarUsuarioControlador();
		}

		if($_POST['modulo_usuario']=="eliminarFoto"){
			echo $insUsuario->eliminarFotoUsuarioControlador();
		}

		if($_POST['modulo_usuario']=="actualizarFoto"){
			echo $insUsuario->actualizarFotoUsuarioControlador();
		}
		
	}else{
		session_destroy();
		header("Location: ".APP_URL."login/");
	}
?>