<?php
require_once "ConexionBD.php";
class mo_sesion extends ConexionBD
{
    static public function iniciarSesion($datosC)
    {
        $pdo = ConexionBD::conectarBD()->prepare("SELECT u.u_username, u.u_password,ut.tpu_descripcion
        FROM usuario u
        INNER JOIN usuario_tipo ut ON ut.id_tipo_usuario=u.id_tipo_usuario
        WHERE u_username = :usuario");

		$pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);

		$pdo -> execute();

		return $pdo -> fetch();

		$pdo -> close();
		$pdo = null;
    }
}


?>