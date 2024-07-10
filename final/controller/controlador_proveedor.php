<?php
    include_once '../config.php';
    date_default_timezone_set('America/Lima');
    //Respuesta en Json
    header('Content-Type: aplication/json');

    $action = isset($_POST['action']) ? $_POST['action'] : '';

    switch($action){
        case 'crearproveedor':
            //Recuperacion informacion del AJAX
            $ruc = $_POST['ruc'];
            $razon_social = $_POST['razon_social'];
            $representante_legal = $_POST['representante_legal'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $celular = $_POST['celular'];
            $direccion = $_POST['direccion'];
            $cuenta_bancaria= $_POST['cuenta_bancaria'];
            $cuenta_CCI= $_POST['cuenta_CCI'];
            $banco= $_POST['banco'];
            
            //Obtenemos la fecha actual
            $fechaActual = date("Y-m-d H:i:s");

            $sql = "INSERT INTO proveedores (ruc, razon_social,representante_legal, email,telefono, celular, direccion,cuenta_bancaria,cuenta_CCI, banco,  fecha_creacion, fecha_actualizacion) VALUES ('$ruc', '$razon_social', '$representante_legal', '$email', '$telefono', '$celular', '$direccion','$cuenta_bancaria','$cuenta_CCI','$banco', '$fechaActual', '$fechaActual')";
            $query = mysqli_query($conexion, $sql);

            if ($query) {
                echo json_encode([
                    "estado" => "ok",
                    "mensaje" => "Se ha creado el proveedor"
                ]);
            } else {
                echo json_encode([
                    "estado" => "error",
                    "mensaje" => "Error: no se puedo crear el proveedor"
                ]);
            }
            break;
        case 'editarproveedor':
            //Recuperacion informacion del AJAX
            $id_proveedor = $_POST['id_proveedor'];
            $ruc = $_POST['ruc'];
            $razon_social = $_POST['razon_social'];
            $representante_legal = $_POST['representante_legal'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $celular = $_POST['celular'];
            $direccion = $_POST['direccion'];
            $cuenta_bancaria= $_POST['cuenta_bancaria'];
            $cuenta_CCI= $_POST['cuenta_CCI'];
            $banco= $_POST['banco'];

            //Obtenemos la fecha actual
            $fechaActual = date("Y-m-d H:i:s");

            $sql = "UPDATE proveedores SET id_proveedor = '$id_proveedor', ruc = '$ruc', razon_social = '$razon_social', representante_legal = '$representante_legal', email = '$email', telefono = '$telefono', celular = '$celular', direccion = '$direccion', cuenta_bancaria = '$cuenta_bancaria', cuenta_CCI = '$cuentaç_CCI', banco = '$banco', fecha_actualizacion = '$fechaActual'";

            $query = mysqli_query($conexion, $sql);

            if ($query) {
                echo json_encode([
                    "estado" => "ok",
                    "mensaje" => "Se ha modificado el Usuario"
                ]);
            } else {
                echo json_encode([
                    "estado" => "error",
                    "mensaje" => "Error: no se puedo modificar el usuario"
                ]);
            }
            break;
        case 'eliminarproveedor':
            $id_proveedor = $_POST['id_proveedor'];

            $sql = "DELETE FROM proveedores WHERE id_proveedor = '$id_proveedor'";
            $query = mysqli_query($conexion, $sql);

            if ($query) {
                echo json_encode([
                    "estado" => "ok",
                    "mensaje" => "Se ha eliminado el usuarios"
                ]);
            } else {
                echo json_encode([
                    "estado" => "error",
                    "mensaje" => "Error: no se puedo eliminar el usuario"
                ]);
            }
            break;
    }
?>