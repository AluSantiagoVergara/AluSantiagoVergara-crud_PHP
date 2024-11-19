<?php
	
	namespace app\modelo;

	class viewsModel{

		/*---------- Modelo obtener vista ----------*/
		protected function obtenerVistasModelo($vista){

			$listaBlanca=["dashboard","userNew","userList","userUpdate","userSearch","userPhoto","logOut"];

			if(in_array($vista, $listaBlanca)){
				if(is_file("./app/vista/content/".$vista."-view.php")){
					$contenido="./app/vista/content/".$vista."-view.php";
				}else{
					$contenido="404";
				}
			}elseif($vista=="login" || $vista=="index"){
				$contenido="login";
			}else{
				$contenido="404";
			}
			return $contenido;
		}

	}