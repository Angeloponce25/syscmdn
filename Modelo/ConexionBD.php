<?php

class conexionBD 
{
    public function conectarBD()
    {
        $bd = new PDO("mysql:host=localhost;dbname=gperu_cmdn","root","");
        $bd -> exec("set names utf8");
        return $bd;
    }
}



?>