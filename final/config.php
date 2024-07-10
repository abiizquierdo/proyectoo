<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $base_de_datos = "system_facturas";

    $conexion = mysqli_connect($servidor, $usuario, $password, $base_de_datos);

    if ($conexion) {
        //echo "Conectado";
    } else {
        echo "ERROR DE CONEXION";
    }
    

?>