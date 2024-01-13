<?php

class co_sesion{

	//Ingreso Secretarias
	public function iniciarSesion(){

		if(isset($_POST["usuario-Ing"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuario-Ing"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["clave-Ing"])){
                

                /*$_SESSION['logueado'] = true;
                header("Location: index.php");
                exit();
                */
                

				$datosC = array("usuario"=>$_POST["usuario-Ing"], "clave"=>$_POST["clave-Ing"]);

				$resultado = mo_sesion::iniciarSesion($datosC);
               

				if($resultado["u_username"] == $_POST["usuario-Ing"] && $resultado["u_password"]== md5($_POST["clave-Ing"])){

					$_SESSION["Ingresar"] = true;

					$_SESSION["tpu_descripcion"] = $resultado["tpu_descripcion"];
					/*$_SESSION["usuario"] = $resultado["usuario"];
					$_SESSION["clave"] = $resultado["clave"];
					$_SESSION["nombre"] = $resultado["nombre"];
					$_SESSION["apellido"] = $resultado["apellido"];
					$_SESSION["foto"] = $resultado["foto"];
					$_SESSION["rol"] = $resultado["rol"];*/

					/*echo '<script>

					window.location = "inicio";
					</script>';*/

                    echo $_SESSION["tpu_descripcion"];

				}else{
                    
					echo '<div class="alert alert-danger">Error al Ingresar</div>';

				}

			}

		}

	}




	

}