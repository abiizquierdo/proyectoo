<?php
    include_once 'config.php';
    include_once 'session.php';

    //Lista de perfiles
    $sql_perfiles = "SELECT * FROM perfiles";
    $result_sql_perfiles = mysqli_query($conexion, $sql_perfiles);
    $perfiles = $result_sql_perfiles->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema v2</title>
</head>

<body>

    <?php include_once 'header.php'; ?>

    <h1>Crear proveedor</h1>

    <form action="">
        
        </select>
        <br><br>

        <label for="">RUC:</label>
        <input id="ruc" type="text"><br><br>

        <label for="">Razon social:</label>
        <input id="razon_social" type="text"><br><br>

        <label for="">Representante Legal:</label>
        <input id="representante_legal" type="text"><br><br>

        <label for="">Email:</label>
        <input id="email" type="text"><br><br>

        <label for="">Telefono:</label>
        <input id="telefono" type="text"><br><br>

        <label for="">Celular:</label>
        <input id="celular" type="text"><br><br>
        
        <label for="">Direccion:</label>
        <input id="direccion" type="text"><br><br>

        <label for="">Cuenta bancaria:</label>
        <input id="cuenta_bancaria" type="text"><br><br>

        <label for="">Cuenta CCI:</label>
        <input id="cuenta_CCI" type="text"><br><br>

        <label for="">Banco:</label>
        <input id="banco" type="text"><br><br>

        <button type="button" id="btn_crear_proveedor">Crear</button>
    </form>


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Usuarios JS -->
    <script src="proveedor.js?v=<?php echo rand(); ?>"></script>
</body>

</html>