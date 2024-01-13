<?php
class mo_sesion
{
    public function iniciarSesion()
    {
        session_start();
        $_SESSION['logueado'] = 'LOGUEADO';
    }
}


?>