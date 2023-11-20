<?php
    $host = 'localhost';
    $usuario = 'root';
    $contraseña = '';
    $basedatos = 'mi_proyecto';

    $conexion =  new mysqli($host, $usuario, $contraseña, $basedatos);

    if($conexion->connect_errno){
        echo 'Fallos en la conexión';
        exit();
    }
?>